<?php

namespace  {
/*
 * This file is part of Contao.
 *
 * (c) Leo Feyer
 *
 * @license LGPL-3.0-or-later
 */

$GLOBALS['TL_DCA']['tl_page'] = array
(
	// Config
	'config' => array
	(
		'label'                       => Config::get('websiteTitle'),
		'dataContainer'               => 'Table',
		'ctable'                      => array('tl_article'),
		'enableVersioning'            => true,
		'onload_callback' => array
		(
			array('tl_page', 'checkPermission'),
			array('tl_page', 'addBreadcrumb'),
			array('tl_page', 'setRootType'),
			array('tl_page', 'showFallbackWarning'),
			array('tl_page', 'makeRedirectPageMandatory'),
			array('tl_page', 'generateSitemap')
		),
		'oncut_callback' => array
		(
			array('tl_page', 'scheduleUpdate')
		),
		'ondelete_callback' => array
		(
			array('tl_page', 'purgeSearchIndex'),
			array('tl_page', 'scheduleUpdate')
		),
		'onsubmit_callback' => array
		(
			array('tl_page', 'scheduleUpdate'),
			array('tl_page', 'generateArticle')
		),
		'sql' => array
		(
			'keys' => array
			(
				'id' => 'primary',
				'alias' => 'index',
				'pid,type,start,stop,published' => 'index'
			)
		)
	),

	// List
	'list' => array
	(
		'sorting' => array
		(
			'mode'                    => 5,
			'icon'                    => 'pagemounts.svg',
			'paste_button_callback'   => array('tl_page', 'pastePage'),
			'panelLayout'             => 'filter;search'
		),
		'label' => array
		(
			'fields'                  => array('title'),
			'format'                  => '%s',
			'label_callback'          => array('tl_page', 'addIcon')
		),
		'global_operations' => array
		(
			'toggleNodes' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['MSC']['toggleAll'],
				'href'                => 'ptg=all',
				'class'               => 'header_toggle',
				'showOnSelect'        => true
			),
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
				'label'               => &$GLOBALS['TL_LANG']['tl_page']['edit'],
				'href'                => 'act=edit',
				'icon'                => 'edit.svg',
				'button_callback'     => array('tl_page', 'editPage')
			),
			'copy' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_page']['copy'],
				'href'                => 'act=paste&amp;mode=copy',
				'icon'                => 'copy.svg',
				'attributes'          => 'onclick="Backend.getScrollOffset()"',
				'button_callback'     => array('tl_page', 'copyPage')
			),
			'copyChilds' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_page']['copyChilds'],
				'href'                => 'act=paste&amp;mode=copy&amp;childs=1',
				'icon'                => 'copychilds.svg',
				'attributes'          => 'onclick="Backend.getScrollOffset()"',
				'button_callback'     => array('tl_page', 'copyPageWithSubpages')
			),
			'cut' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_page']['cut'],
				'href'                => 'act=paste&amp;mode=cut',
				'icon'                => 'cut.svg',
				'attributes'          => 'onclick="Backend.getScrollOffset()"',
				'button_callback'     => array('tl_page', 'cutPage')
			),
			'delete' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_page']['delete'],
				'href'                => 'act=delete',
				'icon'                => 'delete.svg',
				'attributes'          => 'onclick="if(!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\'))return false;Backend.getScrollOffset()"',
				'button_callback'     => array('tl_page', 'deletePage')
			),
			'toggle' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_page']['toggle'],
				'icon'                => 'visible.svg',
				'attributes'          => 'onclick="Backend.getScrollOffset();return AjaxRequest.toggleVisibility(this,%s)"',
				'button_callback'     => array('tl_page', 'toggleIcon')
			),
			'show' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_page']['show'],
				'href'                => 'act=show',
				'icon'                => 'show.svg'
			),
			'articles' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_page']['articles'],
				'href'                => 'do=article',
				'icon'                => 'article.svg',
				'button_callback'     => array('tl_page', 'editArticles')
			)
		)
	),

	// Select
	'select' => array
	(
		'buttons_callback' => array
		(
			array('tl_page', 'addAliasButton')
		)
	),

	// Palettes
	'palettes' => array
	(
		'__selector__'                => array('type', 'autoforward', 'protected', 'createSitemap', 'includeLayout', 'includeCache', 'includeChmod'),
		'default'                     => '{title_legend},title,alias,type',
		'regular'                     => '{title_legend},title,alias,type;{meta_legend},pageTitle,robots,description;{protected_legend:hide},protected;{layout_legend:hide},includeLayout;{cache_legend:hide},includeCache;{chmod_legend:hide},includeChmod;{search_legend},noSearch;{expert_legend:hide},cssClass,sitemap,hide,guests;{tabnav_legend:hide},tabindex,accesskey;{publish_legend},published,start,stop',
		'forward'                     => '{title_legend},title,alias,type;{meta_legend},pageTitle;{redirect_legend},jumpTo,redirect;{protected_legend:hide},protected;{layout_legend:hide},includeLayout;{cache_legend:hide},includeCache;{chmod_legend:hide},includeChmod;{expert_legend:hide},cssClass,sitemap,hide,guests;{tabnav_legend:hide},tabindex,accesskey;{publish_legend},published,start,stop',
		'redirect'                    => '{title_legend},title,alias,type;{meta_legend},pageTitle;{redirect_legend},redirect,url,target;{protected_legend:hide},protected;{layout_legend:hide},includeLayout;{cache_legend:hide},includeCache;{chmod_legend:hide},includeChmod;{expert_legend:hide},cssClass,sitemap,hide,guests;{tabnav_legend:hide},tabindex,accesskey;{publish_legend},published,start,stop',
		'root'                        => '{title_legend},title,alias,type;{meta_legend},pageTitle;{dns_legend},dns,useSSL,language,fallback,staticFiles,staticPlugins;{global_legend:hide},dateFormat,timeFormat,datimFormat,adminEmail;{sitemap_legend:hide},createSitemap;{protected_legend:hide},protected;{layout_legend},includeLayout;{cache_legend:hide},includeCache;{chmod_legend:hide},includeChmod;{publish_legend},published,start,stop',
		'logout'                      => '{title_legend},title,alias,type;{forward_legend},jumpTo,redirectBack;{protected_legend:hide},protected;{chmod_legend:hide},includeChmod;{expert_legend:hide},hide;;{publish_legend},published,start,stop',
		'error_403'                   => '{title_legend},title,alias,type;{meta_legend},pageTitle,robots,description;{forward_legend},autoforward;{layout_legend:hide},includeLayout;{cache_legend:hide},includeCache;{chmod_legend:hide},includeChmod;{expert_legend:hide},cssClass;{publish_legend},published,start,stop',
		'error_404'                   => '{title_legend},title,alias,type;{meta_legend},pageTitle,robots,description;{forward_legend},autoforward;{layout_legend:hide},includeLayout;{cache_legend:hide},includeCache;{chmod_legend:hide},includeChmod;{expert_legend:hide},cssClass;{publish_legend},published,start,stop'
	),

	// Subpalettes
	'subpalettes' => array
	(
		'autoforward'                 => 'jumpTo,redirect',
		'protected'                   => 'groups',
		'createSitemap'               => 'sitemapName',
		'includeLayout'               => 'layout,mobileLayout',
		'includeCache'                => 'cache,clientCache',
		'includeChmod'                => 'cuser,cgroup,chmod'
	),

	// Fields
	'fields' => array
	(
		'id' => array
		(
			'label'                   => array('ID'),
			'search'                  => true,
			'sql'                     => "int(10) unsigned NOT NULL auto_increment"
		),
		'pid' => array
		(
			'sql'                     => "int(10) unsigned NOT NULL default '0'"
		),
		'sorting' => array
		(
			'sql'                     => "int(10) unsigned NOT NULL default '0'"
		),
		'tstamp' => array
		(
			'sql'                     => "int(10) unsigned NOT NULL default '0'"
		),
		'title' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_page']['title'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'maxlength'=>255, 'decodeEntities'=>true, 'tl_class'=>'w50'),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		'alias' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_page']['alias'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'folderalias', 'doNotCopy'=>true, 'maxlength'=>128, 'tl_class'=>'w50 clr'),
			'save_callback' => array
			(
				array('tl_page', 'generateAlias')
			),
			'sql'                     => "varchar(255) COLLATE utf8_bin NOT NULL default ''"
		),
		'type' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_page']['type'],
			'default'                 => 'regular',
			'exclude'                 => true,
			'filter'                  => true,
			'inputType'               => 'select',
			'options_callback'        => array('tl_page', 'getPageTypes'),
			'eval'                    => array('helpwizard'=>true, 'submitOnChange'=>true, 'tl_class'=>'w50'),
			'reference'               => &$GLOBALS['TL_LANG']['PTY'],
			'save_callback' => array
			(
				array('tl_page', 'checkRootType')
			),
			'sql'                     => "varchar(32) NOT NULL default ''"
		),
		'pageTitle' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_page']['pageTitle'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>255, 'decodeEntities'=>true, 'tl_class'=>'w50'),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		'language' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_page']['language'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'rgxp'=>'language', 'maxlength'=>5, 'nospace'=>true, 'doNotCopy'=>true, 'tl_class'=>'w50'),
			'sql'                     => "varchar(5) NOT NULL default ''"
		),
		'robots' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_page']['robots'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'select',
			'options'                 => array('index,follow', 'index,nofollow', 'noindex,follow', 'noindex,nofollow'),
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "varchar(32) NOT NULL default ''"
		),
		'description' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_page']['description'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'textarea',
			'eval'                    => array('style'=>'height:60px', 'decodeEntities'=>true, 'tl_class'=>'clr'),
			'sql'                     => "text NULL"
		),
		'redirect' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_page']['redirect'],
			'default'                 => 'permanent',
			'exclude'                 => true,
			'inputType'               => 'select',
			'options'                 => array('permanent', 'temporary'),
			'eval'                    => array('tl_class'=>'w50'),
			'reference'               => &$GLOBALS['TL_LANG']['tl_page'],
			'sql'                     => "varchar(32) NOT NULL default ''"
		),
		'jumpTo' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_page']['jumpTo'],
			'exclude'                 => true,
			'inputType'               => 'pageTree',
			'foreignKey'              => 'tl_page.title',
			'eval'                    => array('fieldType'=>'radio'), // do not set mandatory (see #5453)
			'save_callback' => array
			(
				array('tl_page', 'checkJumpTo')
			),
			'sql'                     => "int(10) unsigned NOT NULL default '0'",
			'relation'                => array('type'=>'hasOne', 'load'=>'lazy')
		),
		'redirectBack' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_page']['redirectBack'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'url' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['MSC']['url'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'rgxp'=>'url', 'decodeEntities'=>true, 'maxlength'=>255, 'tl_class'=>'w50'),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		'target' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['MSC']['target'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50 m12'),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'dns' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_page']['dns'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'url', 'decodeEntities'=>true, 'maxlength'=>255, 'tl_class'=>'w50'),
			'save_callback' => array
			(
				array('tl_page', 'checkDns')
			),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		'staticFiles' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['MSC']['staticFiles'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'url', 'trailingSlash'=>false, 'tl_class'=>'w50'),
			'save_callback' => array
			(
				array('tl_page', 'checkStaticUrl')
			),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		'staticPlugins' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['MSC']['staticPlugins'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'url', 'trailingSlash'=>false, 'tl_class'=>'w50'),
			'save_callback' => array
			(
				array('tl_page', 'checkStaticUrl')
			),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		'fallback' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_page']['fallback'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('doNotCopy'=>true, 'tl_class'=>'w50 m12'),
			'save_callback' => array
			(
				array('tl_page', 'checkFallback')
			),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'adminEmail' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_page']['adminEmail'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>255, 'rgxp'=>'friendly', 'decodeEntities'=>true, 'tl_class'=>'w50'),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		'dateFormat' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_page']['dateFormat'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('helpwizard'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50'),
			'explanation'             => 'dateFormat',
			'sql'                     => "varchar(32) NOT NULL default ''"
		),
		'timeFormat' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_page']['timeFormat'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('decodeEntities'=>true, 'tl_class'=>'w50'),
			'sql'                     => "varchar(32) NOT NULL default ''"
		),
		'datimFormat' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_page']['datimFormat'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('decodeEntities'=>true, 'tl_class'=>'w50'),
			'sql'                     => "varchar(32) NOT NULL default ''"
		),
		'createSitemap' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_page']['createSitemap'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('submitOnChange'=>true),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'sitemapName' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_page']['sitemapName'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'unique'=>true, 'rgxp'=>'alnum', 'decodeEntities'=>true, 'maxlength'=>32, 'tl_class'=>'w50'),
			'save_callback' => array
			(
				array('tl_page', 'checkFeedAlias')
			),
			'sql'                     => "varchar(32) NOT NULL default ''"
		),
		'useSSL' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_page']['useSSL'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50 m12'),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'autoforward' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_page']['autoforward'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('submitOnChange'=>true),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'protected' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_page']['protected'],
			'exclude'                 => true,
			'filter'                  => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('submitOnChange'=>true),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'groups' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_page']['groups'],
			'exclude'                 => true,
			'filter'                  => true,
			'inputType'               => 'checkbox',
			'foreignKey'              => 'tl_member_group.name',
			'eval'                    => array('mandatory'=>true, 'multiple'=>true),
			'sql'                     => "blob NULL",
			'relation'                => array('type'=>'hasMany', 'load'=>'lazy')
		),
		'includeLayout' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_page']['includeLayout'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('submitOnChange'=>true),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'layout' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_page']['layout'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'select',
			'foreignKey'              => 'tl_layout.name',
			'options_callback'        => array('tl_page', 'getPageLayouts'),
			'eval'                    => array('chosen'=>true, 'tl_class'=>'w50'),
			'sql'                     => "int(10) unsigned NOT NULL default '0'",
			'relation'                => array('type'=>'hasOne', 'load'=>'lazy')
		),
		'mobileLayout' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_page']['mobileLayout'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'select',
			'foreignKey'              => 'tl_layout.name',
			'options_callback'        => array('tl_page', 'getPageLayouts'),
			'eval'                    => array('includeBlankOption'=>true, 'chosen'=>true, 'tl_class'=>'w50'),
			'sql'                     => "int(10) unsigned NOT NULL default '0'",
			'relation'                => array('type'=>'hasOne', 'load'=>'lazy')
		),
		'includeCache' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_page']['includeCache'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('submitOnChange'=>true),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'cache' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_page']['cache'],
			'default'                 => 0,
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'select',
			'options'                 => array(0, 5, 15, 30, 60, 300, 900, 1800, 3600, 10800, 21600, 43200, 86400, 259200, 604800, 2592000),
			'reference'               => &$GLOBALS['TL_LANG']['CACHE'],
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "int(10) unsigned NOT NULL default '0'"
		),
		'clientCache' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_page']['clientCache'],
			'default'                 => 0,
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'select',
			'options'                 => array(0, 5, 15, 30, 60, 300, 900, 1800, 3600, 10800, 21600, 43200, 86400, 259200, 604800, 2592000),
			'reference'               => &$GLOBALS['TL_LANG']['CACHE'],
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "int(10) unsigned NOT NULL default '0'"
		),
		'includeChmod' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_page']['includeChmod'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('submitOnChange'=>true),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'cuser' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_page']['cuser'],
			'default'                 => (int) Config::get('defaultUser'),
			'search'                  => true,
			'exclude'                 => true,
			'inputType'               => 'select',
			'foreignKey'              => 'tl_user.name',
			'eval'                    => array('mandatory'=>true, 'chosen'=>true, 'includeBlankOption'=>true, 'tl_class'=>'w50'),
			'sql'                     => "int(10) unsigned NOT NULL default '0'",
			'relation'                => array('type'=>'hasOne', 'load'=>'lazy')
		),
		'cgroup' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_page']['cgroup'],
			'default'                 => (int) Config::get('defaultGroup'),
			'search'                  => true,
			'exclude'                 => true,
			'inputType'               => 'select',
			'foreignKey'              => 'tl_user_group.name',
			'eval'                    => array('mandatory'=>true, 'chosen'=>true, 'includeBlankOption'=>true, 'tl_class'=>'w50'),
			'sql'                     => "int(10) unsigned NOT NULL default '0'",
			'relation'                => array('type'=>'hasOne', 'load'=>'lazy')
		),
		'chmod' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_page']['chmod'],
			'default'                 => Config::get('defaultChmod'),
			'exclude'                 => true,
			'inputType'               => 'chmod',
			'eval'                    => array('tl_class'=>'clr'),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		'noSearch' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_page']['noSearch'],
			'exclude'                 => true,
			'filter'                  => true,
			'inputType'               => 'checkbox',
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'cssClass' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_page']['cssClass'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>64, 'tl_class'=>'w50'),
			'sql'                     => "varchar(64) NOT NULL default ''"
		),
		'sitemap' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_page']['sitemap'],
			'exclude'                 => true,
			'inputType'               => 'select',
			'options'                 => array('map_default', 'map_always', 'map_never'),
			'eval'                    => array('maxlength'=>32, 'tl_class'=>'w50'),
			'reference'               => &$GLOBALS['TL_LANG']['tl_page'],
			'sql'                     => "varchar(32) NOT NULL default ''"
		),
		'hide' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_page']['hide'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'guests' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_page']['guests'],
			'exclude'                 => true,
			'filter'                  => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'tabindex' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_page']['tabindex'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'natural', 'nospace'=>true, 'tl_class'=>'w50'),
			'sql'                     => "smallint(5) unsigned NOT NULL default '0'"
		),
		'accesskey' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_page']['accesskey'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'alnum', 'maxlength'=>1, 'tl_class'=>'w50'),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'published' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_page']['published'],
			'exclude'                 => true,
			'filter'                  => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('doNotCopy'=>true),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'start' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_page']['start'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'datim', 'datepicker'=>true, 'tl_class'=>'w50 wizard'),
			'sql'                     => "varchar(10) NOT NULL default ''"
		),
		'stop' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_page']['stop'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'datim', 'datepicker'=>true, 'tl_class'=>'w50 wizard'),
			'sql'                     => "varchar(10) NOT NULL default ''"
		)
	)
);

// Disable the articles link in the modal window
if (Input::get('popup'))
{
	unset($GLOBALS['TL_DCA']['tl_page']['list']['operations']['articles']);
}

/**
 * Provide miscellaneous methods that are used by the data configuration array.
 *
 * @author Leo Feyer <https://github.com/leofeyer>
 */
class tl_page extends Backend
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
	 * Check permissions to edit table tl_page
	 *
	 * @throws Contao\CoreBundle\Exception\AccessDeniedException
	 */
	public function checkPermission()
	{
		if ($this->User->isAdmin)
		{
			return;
		}

		/** @var Symfony\Component\HttpFoundation\Session\SessionInterface $objSession */
		$objSession = System::getContainer()->get('session');

		$session = $objSession->all();

		// Set the default page user and group
		$GLOBALS['TL_DCA']['tl_page']['fields']['cuser']['default'] = (int) Config::get('defaultUser') ?: $this->User->id;
		$GLOBALS['TL_DCA']['tl_page']['fields']['cgroup']['default'] = (int) Config::get('defaultGroup') ?: (int) $this->User->groups[0];

		// Restrict the page tree
		if (empty($this->User->pagemounts) || !is_array($this->User->pagemounts))
		{
			$root = array(0);
		}
		else
		{
			$root = $this->User->pagemounts;
		}

		$GLOBALS['TL_DCA']['tl_page']['list']['sorting']['root'] = $root;

		// Set allowed page IDs (edit multiple)
		if (is_array($session['CURRENT']['IDS']))
		{
			$edit_all = array();
			$delete_all = array();

			foreach ($session['CURRENT']['IDS'] as $id)
			{
				$objPage = $this->Database->prepare("SELECT id, pid, type, includeChmod, chmod, cuser, cgroup FROM tl_page WHERE id=?")
										  ->limit(1)
										  ->execute($id);

				if ($objPage->numRows < 1 || !$this->User->hasAccess($objPage->type, 'alpty'))
				{
					continue;
				}

				$row = $objPage->row();

				if ($this->User->isAllowed(BackendUser::CAN_EDIT_PAGE, $row))
				{
					$edit_all[] = $id;
				}

				// Mounted pages cannot be deleted
				if ($this->User->isAllowed(BackendUser::CAN_DELETE_PAGE, $row) && !$this->User->hasAccess($id, 'pagemounts'))
				{
					$delete_all[] = $id;
				}
			}

			$session['CURRENT']['IDS'] = (Input::get('act') == 'deleteAll') ? $delete_all : $edit_all;
		}

		// Set allowed clipboard IDs
		if (isset($session['CLIPBOARD']['tl_page']) && is_array($session['CLIPBOARD']['tl_page']['id']))
		{
			$clipboard = array();

			foreach ($session['CLIPBOARD']['tl_page']['id'] as $id)
			{
				$objPage = $this->Database->prepare("SELECT id, pid, type, includeChmod, chmod, cuser, cgroup FROM tl_page WHERE id=?")
										  ->limit(1)
										  ->execute($id);

				if ($objPage->numRows < 1 || !$this->User->hasAccess($objPage->type, 'alpty'))
				{
					continue;
				}

				if ($this->User->isAllowed(BackendUser::CAN_EDIT_PAGE_HIERARCHY, $objPage->row()))
				{
					$clipboard[] = $id;
				}
			}

			$session['CLIPBOARD']['tl_page']['id'] = $clipboard;
		}

		// Overwrite session
		$objSession->replace($session);

		// Check permissions to save and create new
		if (Input::get('act') == 'edit')
		{
			$objPage = $this->Database->prepare("SELECT * FROM tl_page WHERE id=(SELECT pid FROM tl_page WHERE id=?)")
									  ->limit(1)
									  ->execute(Input::get('id'));

			if ($objPage->numRows && !$this->User->isAllowed(BackendUser::CAN_EDIT_PAGE_HIERARCHY, $objPage->row()))
			{
				$GLOBALS['TL_DCA']['tl_page']['config']['closed'] = true;
			}
		}

		// Check current action
		if (Input::get('act') && Input::get('act') != 'paste')
		{
			$permission = 0;
			$cid = CURRENT_ID ?: Input::get('id');
			$ids = ($cid != '') ? array($cid) : array();

			// Set permission
			switch (Input::get('act'))
			{
				case 'edit':
				case 'toggle':
					$permission = BackendUser::CAN_EDIT_PAGE;
					break;

				case 'move':
					$permission = BackendUser::CAN_EDIT_PAGE_HIERARCHY;
					$ids[] = Input::get('sid');
					break;

				case 'create':
				case 'copy':
				case 'copyAll':
				case 'cut':
				case 'cutAll':
					$permission = BackendUser::CAN_EDIT_PAGE_HIERARCHY;

					// Check the parent page in "paste into" mode
					if (Input::get('mode') == 2)
					{
						$ids[] = Input::get('pid');
					}
					// Check the parent's parent page in "paste after" mode
					else
					{
						$objPage = $this->Database->prepare("SELECT pid FROM tl_page WHERE id=?")
												  ->limit(1)
												  ->execute(Input::get('pid'));

						$ids[] = $objPage->pid;
					}
					break;

				case 'delete':
					$permission = BackendUser::CAN_DELETE_PAGE;
					break;
			}

			// Check user permissions
			if (Input::get('act') != 'show')
			{
				$pagemounts = array();

				// Get all allowed pages for the current user
				foreach ($this->User->pagemounts as $root)
				{
					if (Input::get('act') != 'delete')
					{
						$pagemounts[] = $root;
					}

					$pagemounts = array_merge($pagemounts, $this->Database->getChildRecords($root, 'tl_page'));
				}

				$error = false;
				$pagemounts = array_unique($pagemounts);

				// Do not allow to paste after pages on the root level (pagemounts)
				if ((Input::get('act') == 'cut' || Input::get('act') == 'cutAll') && Input::get('mode') == 1 && in_array(Input::get('pid'), $this->eliminateNestedPages($this->User->pagemounts)))
				{
					throw new Contao\CoreBundle\Exception\AccessDeniedException('Not enough permissions to paste page ID ' . Input::get('id') . ' after mounted page ID ' . Input::get('pid') . ' (root level).');
				}

				// Check each page
				foreach ($ids as $i=>$id)
				{
					if (!in_array($id, $pagemounts))
					{
						$this->log('Page ID ' . $id . ' was not mounted', __METHOD__, TL_ERROR);

						$error = true;
						break;
					}

					// Get the page object
					$objPage = $this->Database->prepare("SELECT * FROM tl_page WHERE id=?")
											  ->limit(1)
											  ->execute($id);

					if ($objPage->numRows < 1)
					{
						continue;
					}

					// Check whether the current user is allowed to access the current page
					if (!$this->User->isAllowed($permission, $objPage->row()))
					{
						$error = true;
						break;
					}

					// Check the type of the first page (not the following parent pages)
					// In "edit multiple" mode, $ids contains only the parent ID, therefore check $id != $_GET['pid'] (see #5620)
					if ($i == 0 && $id != Input::get('pid') && Input::get('act') != 'create' && !$this->User->hasAccess($objPage->type, 'alpty'))
					{
						$this->log('Not enough permissions to  ' . Input::get('act') . ' ' . $objPage->type . ' pages', __METHOD__, TL_ERROR);

						$error = true;
						break;
					}
				}

				// Redirect if there is an error
				if ($error)
				{
					throw new Contao\CoreBundle\Exception\AccessDeniedException('Not enough permissions to ' . Input::get('act') . ' page ID ' . $cid . ' or paste after/into page ID ' . Input::get('pid') . '.');
				}
			}
		}
	}

	/**
	 * Add the breadcrumb menu
	 */
	public function addBreadcrumb()
	{
		Backend::addPagesBreadcrumb();
	}

	/**
	 * Make new top-level pages root pages
	 *
	 * @param DataContainer $dc
	 */
	public function setRootType(DataContainer $dc)
	{
		if (Input::get('act') != 'create')
		{
			return;
		}

		// Insert into
		if (Input::get('pid') == 0)
		{
			$GLOBALS['TL_DCA']['tl_page']['fields']['type']['default'] = 'root';
		}
		elseif (Input::get('mode') == 1)
		{
			$objPage = $this->Database->prepare("SELECT * FROM " . $dc->table . " WHERE id=?")
									  ->limit(1)
									  ->execute(Input::get('pid'));

			if ($objPage->pid == 0)
			{
				$GLOBALS['TL_DCA']['tl_page']['fields']['type']['default'] = 'root';
			}
		}
	}

	/**
	 * Make sure that top-level pages are root pages
	 *
	 * @param mixed         $varValue
	 * @param DataContainer $dc
	 *
	 * @return mixed
	 *
	 * @throws Exception
	 */
	public function checkRootType($varValue, DataContainer $dc)
	{
		if ($varValue != 'root' && $dc->activeRecord->pid == 0)
		{
			throw new Exception($GLOBALS['TL_LANG']['ERR']['topLevelRoot']);
		}

		return $varValue;
	}

	/**
	 * Show a warning if there is no language fallback page
	 */
	public function showFallbackWarning()
	{
		if (Input::get('act') != '')
		{
			return;
		}

		$messages = new \Messages();
		Message::addRaw($messages->languageFallback());
	}

	/**
	 * Make the redirect page mandatory if the page is a logout page
	 *
	 * @param DataContainer $dc
	 *
	 * @throws Exception
	 */
	public function makeRedirectPageMandatory(DataContainer $dc)
	{
		$objPage = $this->Database->prepare("SELECT * FROM " . $dc->table . " WHERE id=?")
								  ->limit(1)
								  ->execute($dc->id);

		if ($objPage->numRows && $objPage->type == 'logout')
		{
			$GLOBALS['TL_DCA']['tl_page']['fields']['jumpTo']['eval']['mandatory'] = true;
		}
	}

	/**
	 * Check for modified pages and update the XML files if necessary
	 */
	public function generateSitemap()
	{
		/** @var Symfony\Component\HttpFoundation\Session\SessionInterface $objSession */
		$objSession = System::getContainer()->get('session');

		$session = $objSession->get('sitemap_updater');

		if (empty($session) || !is_array($session))
		{
			return;
		}

		$this->import('Automator');

		foreach ($session as $id)
		{
			$this->Automator->generateSitemap($id);
		}

		$objSession->set('sitemap_updater', null);
	}

	/**
	 * Schedule a sitemap update
	 *
	 * This method is triggered when a single page or multiple pages are
	 * modified (edit/editAll), moved (cut/cutAll) or deleted
	 * (delete/deleteAll). Since duplicated pages are unpublished by default,
	 * it is not necessary to schedule updates on copyAll as well.
	 *
	 * @param DataContainer $dc
	 */
	public function scheduleUpdate(DataContainer $dc)
	{
		// Return if there is no ID
		if (!$dc->activeRecord || !$dc->activeRecord->id || Input::get('act') == 'copy')
		{
			return;
		}

		/** @var Symfony\Component\HttpFoundation\Session\SessionInterface $objSession */
		$objSession = System::getContainer()->get('session');

		// Store the ID in the session
		$session = $objSession->get('sitemap_updater');
		$session[] = PageModel::findWithDetails($dc->activeRecord->id)->rootId;
		$objSession->set('sitemap_updater', array_unique($session));
	}

	/**
	 * Auto-generate a page alias if it has not been set yet
	 *
	 * @param mixed         $varValue
	 * @param DataContainer $dc
	 *
	 * @return string
	 *
	 * @throws Exception
	 */
	public function generateAlias($varValue, DataContainer $dc)
	{
		$autoAlias = false;

		// Generate an alias if there is none
		if ($varValue == '')
		{
			$autoAlias = true;
			$varValue = StringUtil::generateAlias($dc->activeRecord->title);

			// Generate folder URL aliases (see #4933)
			if (Config::get('folderUrl'))
			{
				$objPage = PageModel::findWithDetails($dc->activeRecord->id);

				if ($objPage->folderUrl != '')
				{
					$varValue = $objPage->folderUrl . $varValue;
				}
			}
		}

		$objAlias = $this->Database->prepare("SELECT id FROM tl_page WHERE id=? OR alias=?")
								   ->execute($dc->id, $varValue);

		// Check whether the page alias exists
		if ($objAlias->numRows > ($autoAlias ? 0 : 1))
		{
			$arrPages = array();
			$strDomain = '';
			$strLanguage = '';

			while ($objAlias->next())
			{
				$objCurrentPage = PageModel::findWithDetails($objAlias->id);
				$domain = $objCurrentPage->domain ?: '*';
				$language = (!$objCurrentPage->rootIsFallback) ? $objCurrentPage->rootLanguage : '*';

				// Store the current page's data
				if ($objCurrentPage->id == $dc->id)
				{
					// Get the DNS and language settings from the POST data (see #4610)
					if ($objCurrentPage->type == 'root')
					{
						$strDomain = Input::post('dns');
						$strLanguage = Input::post('language');
					}
					else
					{
						$strDomain = $domain;
						$strLanguage = $language;
					}
				}
				else
				{
					// Check the domain and language or the domain only
					if (Config::get('addLanguageToUrl'))
					{
						$arrPages[$domain][$language][] = $objAlias->id;
					}
					else
					{
						$arrPages[$domain][] = $objAlias->id;
					}
				}
			}

			$arrCheck = Config::get('addLanguageToUrl') ? $arrPages[$strDomain][$strLanguage] : $arrPages[$strDomain];

			// Check if there are multiple results for the current domain
			if (!empty($arrCheck))
			{
				if (!$autoAlias)
				{
					throw new Exception(sprintf($GLOBALS['TL_LANG']['ERR']['aliasExists'], $varValue));
				}

				$varValue .= '-' . $dc->id;
			}
		}

		if ($varValue != $dc->activeRecord->alias)
		{
			$this->purgeSearchIndex($dc);
		}

		return $varValue;
	}

	/**
	 * Automatically create an article in the main column of a new page
	 *
	 * @param DataContainer $dc
	 */
	public function generateArticle(DataContainer $dc)
	{
		// Return if there is no active record (override all)
		if (!$dc->activeRecord)
		{
			return;
		}

		// No title or not a regular page
		if ($dc->activeRecord->title == '' || !in_array($dc->activeRecord->type, array('regular', 'error_403', 'error_404')))
		{
			return;
		}

		/** @var Symfony\Component\HttpFoundation\Session\Attribute\AttributeBagInterface $objSessionBag */
		$objSessionBag = System::getContainer()->get('session')->getBag('contao_backend');

		$new_records = $objSessionBag->get('new_records');

		// Not a new page
		if (!$new_records || !is_array($new_records[$dc->table]) || !in_array($dc->id, $new_records[$dc->table]))
		{
			return;
		}

		// Check whether there are articles (e.g. on copied pages)
		$objTotal = $this->Database->prepare("SELECT COUNT(*) AS count FROM tl_article WHERE pid=?")
								   ->execute($dc->id);

		if ($objTotal->count > 0)
		{
			return;
		}

		// Create article
		$arrSet['pid'] = $dc->id;
		$arrSet['sorting'] = 128;
		$arrSet['tstamp'] = time();
		$arrSet['author'] = $this->User->id;
		$arrSet['inColumn'] = 'main';
		$arrSet['title'] = $dc->activeRecord->title;
		$arrSet['alias'] = str_replace('/', '-', $dc->activeRecord->alias); // see #5168
		$arrSet['published'] = $dc->activeRecord->published;

		$this->Database->prepare("INSERT INTO tl_article %s")->set($arrSet)->execute();
	}

	/**
	 * Purge the search index if a page is being deleted
	 *
	 * @param DataContainer $dc
	 */
	public function purgeSearchIndex(DataContainer $dc)
	{
		if (!$dc->id)
		{
			return;
		}

		$objResult = $this->Database->prepare("SELECT id FROM tl_search WHERE pid=?")
									->execute($dc->id);

		while ($objResult->next())
		{
			$this->Database->prepare("DELETE FROM tl_search WHERE id=?")
						   ->execute($objResult->id);

			$this->Database->prepare("DELETE FROM tl_search_index WHERE pid=?")
						   ->execute($objResult->id);
		}
	}

	/**
	 * Check the sitemap alias
	 *
	 * @param mixed         $varValue
	 * @param DataContainer $dc
	 *
	 * @return mixed
	 *
	 * @throws Exception
	 */
	public function checkFeedAlias($varValue, DataContainer $dc)
	{
		// No change or empty value
		if ($varValue == $dc->value || $varValue == '')
		{
			return $varValue;
		}

		$varValue = StringUtil::standardize($varValue); // see #5096

		$this->import('Automator');
		$arrFeeds = $this->Automator->purgeXmlFiles(true);

		// Alias exists
		if (in_array($varValue, $arrFeeds))
		{
			throw new Exception(sprintf($GLOBALS['TL_LANG']['ERR']['aliasExists'], $varValue));
		}

		return $varValue;
	}

	/**
	 * Prevent circular references
	 *
	 * @param mixed         $varValue
	 * @param DataContainer $dc
	 *
	 * @return mixed
	 *
	 * @throws Exception
	 */
	public function checkJumpTo($varValue, DataContainer $dc)
	{
		if ($varValue == $dc->id)
		{
			throw new Exception($GLOBALS['TL_LANG']['ERR']['circularReference']);
		}

		return $varValue;
	}

	/**
	 * Check the DNS settings
	 *
	 * @param mixed $varValue
	 *
	 * @return mixed
	 */
	public function checkDns($varValue)
	{
		return str_ireplace(array('http://', 'https://', 'ftp://'), '', $varValue);
	}

	/**
	 * Make sure there is only one fallback per domain (thanks to Andreas Schempp)
	 *
	 * @param mixed         $varValue
	 * @param DataContainer $dc
	 *
	 * @return mixed
	 *
	 * @throws Exception
	 */
	public function checkFallback($varValue, DataContainer $dc)
	{
		if ($varValue == '')
		{
			return '';
		}

		$objPage = $this->Database->prepare("SELECT id FROM tl_page WHERE type='root' AND fallback=1 AND dns=? AND id!=?")
								  ->execute($dc->activeRecord->dns, $dc->activeRecord->id);

		if ($objPage->numRows)
		{
			throw new Exception($GLOBALS['TL_LANG']['ERR']['multipleFallback']);
		}

		return $varValue;
	}

	/**
	 * Check a static URL
	 *
	 * @param mixed $varValue
	 *
	 * @return mixed
	 */
	public function checkStaticUrl($varValue)
	{
		if ($varValue != '')
		{
			$varValue = preg_replace('@https?://@', '', $varValue);
		}

		return $varValue;
	}

	/**
	 * Returns all allowed page types as array
	 *
	 * @param DataContainer $dc
	 *
	 * @return array
	 */
	public function getPageTypes(DataContainer $dc)
	{
		$arrOptions = array();

		foreach (array_keys($GLOBALS['TL_PTY']) as $pty)
		{
			// Root pages are allowed on the first level only (see #6360)
			if ($pty == 'root' && $dc->activeRecord && $dc->activeRecord->pid > 0)
			{
				continue;
			}

			// Allow the currently selected option and anything the user has access to
			if ($pty == $dc->value || $this->User->hasAccess($pty, 'alpty'))
			{
				$arrOptions[] = $pty;
			}
		}

		return $arrOptions;
	}

	/**
	 * Return all page layouts grouped by theme
	 *
	 * @return array
	 */
	public function getPageLayouts()
	{
		$objLayout = $this->Database->execute("SELECT l.id, l.name, t.name AS theme FROM tl_layout l LEFT JOIN tl_theme t ON l.pid=t.id ORDER BY t.name, l.name");

		if ($objLayout->numRows < 1)
		{
			return array();
		}

		$return = array();

		while ($objLayout->next())
		{
			$return[$objLayout->theme][$objLayout->id] = $objLayout->name;
		}

		return $return;
	}

	/**
	 * Add an image to each page in the tree
	 *
	 * @param array         $row
	 * @param string        $label
	 * @param DataContainer $dc
	 * @param string        $imageAttribute
	 * @param boolean       $blnReturnImage
	 * @param boolean       $blnProtected
	 *
	 * @return string
	 */
	public function addIcon($row, $label, DataContainer $dc=null, $imageAttribute='', $blnReturnImage=false, $blnProtected=false)
	{
		return Backend::addPageIcon($row, $label, $dc, $imageAttribute, $blnReturnImage, $blnProtected);
	}

	/**
	 * Return the edit page button
	 *
	 * @param array  $row
	 * @param string $href
	 * @param string $label
	 * @param string $title
	 * @param string $icon
	 * @param string $attributes
	 *
	 * @return string
	 */
	public function editPage($row, $href, $label, $title, $icon, $attributes)
	{
		return ($this->User->hasAccess($row['type'], 'alpty') && $this->User->isAllowed(BackendUser::CAN_EDIT_PAGE, $row)) ? '<a href="' . $this->addToUrl($href . '&amp;id=' . $row['id']) . '" title="' . StringUtil::specialchars($title) . '"' . $attributes . '>' . Image::getHtml($icon, $label) . '</a> ' : Image::getHtml(preg_replace('/\.svg$/i', '_.svg', $icon)) . ' ';
	}

	/**
	 * Return the copy page button
	 *
	 * @param array  $row
	 * @param string $href
	 * @param string $label
	 * @param string $title
	 * @param string $icon
	 * @param string $attributes
	 * @param string $table
	 *
	 * @return string
	 */
	public function copyPage($row, $href, $label, $title, $icon, $attributes, $table)
	{
		if ($GLOBALS['TL_DCA'][$table]['config']['closed'])
		{
			return '';
		}

		return ($this->User->hasAccess($row['type'], 'alpty') && $this->User->isAllowed(BackendUser::CAN_EDIT_PAGE_HIERARCHY, $row)) ? '<a href="' . $this->addToUrl($href . '&amp;id=' . $row['id']) . '" title="' . StringUtil::specialchars($title) . '"' . $attributes . '>' . Image::getHtml($icon, $label) . '</a> ' : Image::getHtml(preg_replace('/\.svg$/i', '_.svg', $icon)) . ' ';
	}

	/**
	 * Return the copy page with subpages button
	 *
	 * @param array  $row
	 * @param string $href
	 * @param string $label
	 * @param string $title
	 * @param string $icon
	 * @param string $attributes
	 * @param string $table
	 *
	 * @return string
	 */
	public function copyPageWithSubpages($row, $href, $label, $title, $icon, $attributes, $table)
	{
		if ($GLOBALS['TL_DCA'][$table]['config']['closed'])
		{
			return '';
		}

		$objSubpages = $this->Database->prepare("SELECT * FROM tl_page WHERE pid=?")
									  ->limit(1)
									  ->execute($row['id']);

		return ($objSubpages->numRows && $this->User->hasAccess($row['type'], 'alpty') && $this->User->isAllowed(BackendUser::CAN_EDIT_PAGE_HIERARCHY, $row)) ? '<a href="' . $this->addToUrl($href . '&amp;id=' . $row['id']) . '" title="' . StringUtil::specialchars($title) . '"' . $attributes . '>' . Image::getHtml($icon, $label) . '</a> ' : Image::getHtml(preg_replace('/\.svg$/i', '_.svg', $icon)) . ' ';
	}

	/**
	 * Return the cut page button
	 *
	 * @param array  $row
	 * @param string $href
	 * @param string $label
	 * @param string $title
	 * @param string $icon
	 * @param string $attributes
	 *
	 * @return string
	 */
	public function cutPage($row, $href, $label, $title, $icon, $attributes)
	{
		return ($this->User->hasAccess($row['type'], 'alpty') && $this->User->isAllowed(BackendUser::CAN_EDIT_PAGE_HIERARCHY, $row)) ? '<a href="' . $this->addToUrl($href . '&amp;id=' . $row['id']) . '" title="' . StringUtil::specialchars($title) . '"' . $attributes . '>' . Image::getHtml($icon, $label) . '</a> ' : Image::getHtml(preg_replace('/\.svg$/i', '_.svg', $icon)) . ' ';
	}

	/**
	 * Return the paste page button
	 *
	 * @param DataContainer $dc
	 * @param array         $row
	 * @param string        $table
	 * @param boolean       $cr
	 * @param array         $arrClipboard
	 *
	 * @return string
	 */
	public function pastePage(DataContainer $dc, $row, $table, $cr, $arrClipboard=null)
	{
		$disablePA = false;
		$disablePI = false;

		// Disable all buttons if there is a circular reference
		if ($arrClipboard !== false && (($arrClipboard['mode'] == 'cut' && ($cr == 1 || $arrClipboard['id'] == $row['id'])) || ($arrClipboard['mode'] == 'cutAll' && ($cr == 1 || in_array($row['id'], $arrClipboard['id'])))))
		{
			$disablePA = true;
			$disablePI = true;
		}

		// Prevent adding non-root pages on top-level
		if (Input::get('mode') != 'create' && $row['pid'] == 0)
		{
			$objPage = $this->Database->prepare("SELECT * FROM " . $table . " WHERE id=?")
									  ->limit(1)
									  ->execute(Input::get('id'));

			if ($objPage->type != 'root')
			{
				$disablePA = true;

				if ($row['id'] == 0)
				{
					$disablePI = true;
				}
			}
		}

		// Check permissions if the user is not an administrator
		if (!$this->User->isAdmin)
		{
			// Disable "paste into" button if there is no permission 2 (move) or 1 (create) for the current page
			if (!$disablePI)
			{
				if (!$this->User->isAllowed(BackendUser::CAN_EDIT_PAGE_HIERARCHY, $row) || (Input::get('mode') == 'create' && !$this->User->isAllowed(BackendUser::CAN_EDIT_PAGE, $row)))
				{
					$disablePI = true;
				}
			}

			$objPage = $this->Database->prepare("SELECT * FROM " . $table . " WHERE id=?")
									  ->limit(1)
									  ->execute($row['pid']);

			// Disable "paste after" button if there is no permission 2 (move) or 1 (create) for the parent page
			if (!$disablePA && $objPage->numRows)
			{
				if (!$this->User->isAllowed(BackendUser::CAN_EDIT_PAGE_HIERARCHY, $objPage->row()) || (Input::get('mode') == 'create' && !$this->User->isAllowed(BackendUser::CAN_EDIT_PAGE, $objPage->row())))
				{
					$disablePA = true;
				}
			}

			// Disable "paste after" button if the parent page is a root page and the user is not an administrator
			if (!$disablePA && ($row['pid'] < 1 || in_array($row['id'], $dc->rootIds)))
			{
				$disablePA = true;
			}
		}

		$return = '';

		// Return the buttons
		$imagePasteAfter = Image::getHtml('pasteafter.svg', sprintf($GLOBALS['TL_LANG'][$table]['pasteafter'][1], $row['id']));
		$imagePasteInto = Image::getHtml('pasteinto.svg', sprintf($GLOBALS['TL_LANG'][$table]['pasteinto'][1], $row['id']));

		if ($row['id'] > 0)
		{
			$return = $disablePA ? Image::getHtml('pasteafter_.svg') . ' ' : '<a href="' . $this->addToUrl('act=' . $arrClipboard['mode'] . '&amp;mode=1&amp;pid=' . $row['id'] . (!is_array($arrClipboard['id']) ? '&amp;id=' . $arrClipboard['id'] : '')) . '" title="' . StringUtil::specialchars(sprintf($GLOBALS['TL_LANG'][$table]['pasteafter'][1], $row['id'])) . '" onclick="Backend.getScrollOffset()">' . $imagePasteAfter . '</a> ';
		}

		return $return . ($disablePI ? Image::getHtml('pasteinto_.svg') . ' ' : '<a href="' . $this->addToUrl('act=' . $arrClipboard['mode'] . '&amp;mode=2&amp;pid=' . $row['id'] . (!is_array($arrClipboard['id']) ? '&amp;id=' . $arrClipboard['id'] : '')) . '" title="' . StringUtil::specialchars(sprintf($GLOBALS['TL_LANG'][$table]['pasteinto'][1], $row['id'])) . '" onclick="Backend.getScrollOffset()">' . $imagePasteInto . '</a> ');
	}

	/**
	 * Return the delete page button
	 *
	 * @param array  $row
	 * @param string $href
	 * @param string $label
	 * @param string $title
	 * @param string $icon
	 * @param string $attributes
	 *
	 * @return string
	 */
	public function deletePage($row, $href, $label, $title, $icon, $attributes)
	{
		$root = func_get_arg(7);

		return ($this->User->hasAccess($row['type'], 'alpty') && $this->User->isAllowed(BackendUser::CAN_DELETE_PAGE, $row) && ($this->User->isAdmin || !in_array($row['id'], $root))) ? '<a href="' . $this->addToUrl($href . '&amp;id=' . $row['id']) . '" title="' . StringUtil::specialchars($title) . '"' . $attributes . '>' . Image::getHtml($icon, $label) . '</a> ' : Image::getHtml(preg_replace('/\.svg$/i', '_.svg', $icon)) . ' ';
	}

	/**
	 * Generate an "edit articles" button and return it as string
	 *
	 * @param array  $row
	 * @param string $href
	 * @param string $label
	 * @param string $title
	 * @param string $icon
	 *
	 * @return string
	 */
	public function editArticles($row, $href, $label, $title, $icon)
	{
		if (!$this->User->hasAccess('article', 'modules'))
		{
			return '';
		}

		return ($row['type'] == 'regular' || $row['type'] == 'error_403' || $row['type'] == 'error_404') ? '<a href="' . $this->addToUrl($href . '&amp;pn=' . $row['id']) . '" title="' . StringUtil::specialchars($title) . '">' . Image::getHtml($icon, $label) . '</a> ' : Image::getHtml(preg_replace('/\.svg$/i', '_.svg', $icon)) . ' ';
	}

	/**
	 * Automatically generate the folder URL aliases
	 *
	 * @param array         $arrButtons
	 * @param DataContainer $dc
	 *
	 * @return array
	 */
	public function addAliasButton($arrButtons, DataContainer $dc)
	{
		if (!$this->User->hasAccess('tl_page::alias', 'alexf'))
		{
			return $arrButtons;
		}

		// Generate the aliases
		if (Input::post('FORM_SUBMIT') == 'tl_select' && isset($_POST['alias']))
		{
			/** @var Symfony\Component\HttpFoundation\Session\SessionInterface $objSession */
			$objSession = System::getContainer()->get('session');

			$session = $objSession->all();
			$ids = $session['CURRENT']['IDS'];

			foreach ($ids as $id)
			{
				$objPage = PageModel::findWithDetails($id);

				if ($objPage === null)
				{
					continue;
				}

				$dc->id = $id;
				$dc->activeRecord = $objPage;

				$strAlias = '';

				// Generate new alias through save callbacks
				foreach ($GLOBALS['TL_DCA'][$dc->table]['fields']['alias']['save_callback'] as $callback)
				{
					if (is_array($callback))
					{
						$this->import($callback[0]);
						$strAlias = $this->{$callback[0]}->{$callback[1]}($strAlias, $dc);
					}
					elseif (is_callable($callback))
					{
						$strAlias = $callback($strAlias, $dc);
					}
				}

				// The alias has not changed
				if ($strAlias == $objPage->alias)
				{
					continue;
				}

				// Initialize the version manager
				$objVersions = new Versions('tl_page', $id);
				$objVersions->initialize();

				// Store the new alias
				$this->Database->prepare("UPDATE tl_page SET alias=? WHERE id=?")
							   ->execute($strAlias, $id);

				// Create a new version
				$objVersions->create();
			}

			$this->redirect($this->getReferer());
		}

		// Add the button
		$arrButtons['alias'] = '<button type="submit" name="alias" id="alias" class="tl_submit" accesskey="a">' . $GLOBALS['TL_LANG']['MSC']['aliasSelected'] . '</button> ';

		return $arrButtons;
	}

	/**
	 * Return the "toggle visibility" button
	 *
	 * @param array  $row
	 * @param string $href
	 * @param string $label
	 * @param string $title
	 * @param string $icon
	 * @param string $attributes
	 *
	 * @return string
	 */
	public function toggleIcon($row, $href, $label, $title, $icon, $attributes)
	{
		if (strlen(Input::get('tid')))
		{
			$this->toggleVisibility(Input::get('tid'), (Input::get('state') == 1), (@func_get_arg(12) ?: null));
			$this->redirect($this->getReferer());
		}

		// Check permissions AFTER checking the tid, so hacking attempts are logged
		if (!$this->User->hasAccess('tl_page::published', 'alexf'))
		{
			return '';
		}

		$href .= '&amp;tid=' . $row['id'] . '&amp;state=' . ($row['published'] ? '' : 1);

		if (!$row['published'])
		{
			$icon = 'invisible.svg';
		}

		$objPage = $this->Database->prepare("SELECT * FROM tl_page WHERE id=?")
								  ->limit(1)
								  ->execute($row['id']);

		if (!$this->User->hasAccess($row['type'], 'alpty') || !$this->User->isAllowed(BackendUser::CAN_EDIT_PAGE, $objPage->row()))
		{
			return Image::getHtml($icon) . ' ';
		}

		return '<a href="' . $this->addToUrl($href) . '" title="' . StringUtil::specialchars($title) . '"' . $attributes . '>' . Image::getHtml($icon, $label, 'data-state="' . ($row['published'] ? 1 : 0) . '"') . '</a> ';
	}

	/**
	 * Disable/enable a user group
	 *
	 * @param integer       $intId
	 * @param boolean       $blnVisible
	 * @param DataContainer $dc
	 *
	 * @throws Contao\CoreBundle\Exception\AccessDeniedException
	 */
	public function toggleVisibility($intId, $blnVisible, DataContainer $dc=null)
	{
		// Set the ID and action
		Input::setGet('id', $intId);
		Input::setGet('act', 'toggle');

		if ($dc)
		{
			$dc->id = $intId; // see #8043
		}

		// Trigger the onload_callback
		if (is_array($GLOBALS['TL_DCA']['tl_page']['config']['onload_callback']))
		{
			foreach ($GLOBALS['TL_DCA']['tl_page']['config']['onload_callback'] as $callback)
			{
				if (is_array($callback))
				{
					$this->import($callback[0]);
					$this->{$callback[0]}->{$callback[1]}($dc);
				}
				elseif (is_callable($callback))
				{
					$callback($dc);
				}
			}
		}

		// Check the field access
		if (!$this->User->hasAccess('tl_page::published', 'alexf'))
		{
			throw new Contao\CoreBundle\Exception\AccessDeniedException('Not enough permissions to publish/unpublish page ID ' . $intId . '.');
		}

		// Set the current record
		if ($dc)
		{
			$objRow = $this->Database->prepare("SELECT * FROM tl_page WHERE id=?")
									 ->limit(1)
									 ->execute($intId);

			if ($objRow->numRows)
			{
				$dc->activeRecord = $objRow;
			}
		}

		$objVersions = new Versions('tl_page', $intId);
		$objVersions->initialize();

		// Trigger the save_callback
		if (is_array($GLOBALS['TL_DCA']['tl_page']['fields']['published']['save_callback']))
		{
			foreach ($GLOBALS['TL_DCA']['tl_page']['fields']['published']['save_callback'] as $callback)
			{
				if (is_array($callback))
				{
					$this->import($callback[0]);
					$blnVisible = $this->{$callback[0]}->{$callback[1]}($blnVisible, $dc);
				}
				elseif (is_callable($callback))
				{
					$blnVisible = $callback($blnVisible, $dc);
				}
			}
		}

		$time = time();

		// Update the database
		$this->Database->prepare("UPDATE tl_page SET tstamp=$time, published='" . ($blnVisible ? '1' : '') . "' WHERE id=?")
					   ->execute($intId);

		if ($dc)
		{
			$dc->activeRecord->tstamp = $time;
			$dc->activeRecord->published = ($blnVisible ? '1' : '');
		}

		// Trigger the onsubmit_callback
		if (is_array($GLOBALS['TL_DCA']['tl_page']['config']['onsubmit_callback']))
		{
			foreach ($GLOBALS['TL_DCA']['tl_page']['config']['onsubmit_callback'] as $callback)
			{
				if (is_array($callback))
				{
					$this->import($callback[0]);
					$this->{$callback[0]}->{$callback[1]}($dc);
				}
				elseif (is_callable($callback))
				{
					$callback($dc);
				}
			}
		}

		$objVersions->create();

		// The onsubmit_callback has triggered scheduleUpdate(), so run generateSitemap() now
		$this->generateSitemap();
	}
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
 * Config.
 */
$GLOBALS['TL_DCA']['tl_page']['config']['onsubmit_callback'][] = ['terminal42_folderpage.datacontainer.page', 'configureFolderPage'];

foreach ($GLOBALS['TL_DCA']['tl_page']['config']['onload_callback'] as $k => $callback) {
    if ('addBreadcrumb' === $callback[1]) {
        $GLOBALS['TL_DCA']['tl_page']['config']['onload_callback'][$k] = ['terminal42_folderpage.datacontainer.page', 'addBreadcrumb'];
    }

    if ('showFallbackWarning' === $callback[1]) {
        $GLOBALS['TL_DCA']['tl_page']['config']['onload_callback'][$k] = ['terminal42_folderpage.datacontainer.page', 'showFallbackWarning'];
    }
}

/*
 * Palettes
 */
$GLOBALS['TL_DCA']['tl_page']['palettes']['folder'] = '{title_legend},title,type;{protected_legend:hide},protected;{layout_legend:hide},includeLayout;{cache_legend:hide},includeCache;{chmod_legend:hide},includeChmod;{expert_legend:hide},cssClass,hide,guests';

/*
 * Fields
 */
if ('checkRootType' === $GLOBALS['TL_DCA']['tl_page']['fields']['type']['save_callback'][0][1]) {
    $GLOBALS['TL_DCA']['tl_page']['fields']['type']['save_callback'][0] = ['terminal42_folderpage.datacontainer.page', 'onSaveType'];
}

$GLOBALS['TL_DCA']['tl_page']['fields']['type']['options_callback'][0] = 'terminal42_folderpage.datacontainer.page';

$GLOBALS['TL_DCA']['tl_page']['fields']['published']['save_callback'][] = ['terminal42_folderpage.datacontainer.page', 'onSavePublished'];
$GLOBALS['TL_DCA']['tl_page']['fields']['alias']['save_callback'][] = ['terminal42_folderpage.datacontainer.page', 'adjustAlias'];
array_unshift($GLOBALS['TL_DCA']['tl_page']['fields']['alias']['save_callback'], ['terminal42_folderpage.datacontainer.page', 'emptyFolderAliases']);

$GLOBALS['TL_DCA']['tl_page']['fields']['hide']['eval']['tl_class'] = 'clr w50';
}

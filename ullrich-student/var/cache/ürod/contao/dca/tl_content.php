<?php

namespace  {
/*
 * This file is part of Contao.
 *
 * (c) Leo Feyer
 *
 * @license LGPL-3.0-or-later
 */

$GLOBALS['TL_DCA']['tl_content'] = array
(
	// Config
	'config' => array
	(
		'dataContainer'               => 'Table',
		'enableVersioning'            => true,
		'ptable'                      => '',
		'dynamicPtable'               => true,
		'onload_callback'             => array
		(
			array('tl_content', 'adjustDcaByType'),
			array('tl_content', 'showJsLibraryHint')
		),
		'sql' => array
		(
			'keys' => array
			(
				'id' => 'primary',
				'pid,ptable,invisible,sorting' => 'index'
			)
		)
	),

	// List
	'list' => array
	(
		'sorting' => array
		(
			'mode'                    => 4,
			'fields'                  => array('sorting'),
			'panelLayout'             => 'filter;search,limit',
			'headerFields'            => array('title', 'headline', 'author', 'inColumn', 'tstamp', 'showTeaser', 'published', 'start', 'stop'),
			'child_record_callback'   => array('tl_content', 'addCteType')
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
				'label'               => &$GLOBALS['TL_LANG']['tl_content']['edit'],
				'href'                => 'act=edit',
				'icon'                => 'edit.svg'
			),
			'copy' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_content']['copy'],
				'href'                => 'act=paste&amp;mode=copy',
				'icon'                => 'copy.svg',
				'attributes'          => 'onclick="Backend.getScrollOffset()"'
			),
			'cut' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_content']['cut'],
				'href'                => 'act=paste&amp;mode=cut',
				'icon'                => 'cut.svg',
				'attributes'          => 'onclick="Backend.getScrollOffset()"'
			),
			'delete' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_content']['delete'],
				'href'                => 'act=delete',
				'icon'                => 'delete.svg',
				'attributes'          => 'onclick="if(!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\'))return false;Backend.getScrollOffset()"',
				'button_callback'     => array('tl_content', 'deleteElement')
			),
			'toggle' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_content']['toggle'],
				'icon'                => 'visible.svg',
				'attributes'          => 'onclick="Backend.getScrollOffset();return AjaxRequest.toggleVisibility(this,%s)"',
				'button_callback'     => array('tl_content', 'toggleIcon')
			),
			'show' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_content']['show'],
				'href'                => 'act=show',
				'icon'                => 'show.svg'
			)
		),
	),

	// Palettes
	'palettes' => array
	(
		'__selector__'                => array('type', 'addImage', 'sortable', 'useImage', 'overwriteMeta', 'protected'),
		'default'                     => '{type_legend},type',
		'headline'                    => '{type_legend},type,headline;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop',
		'text'                        => '{type_legend},type,headline;{text_legend},text;{image_legend},addImage;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop',
		'html'                        => '{type_legend},type;{text_legend},html;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests;{invisible_legend:hide},invisible,start,stop',
		'list'                        => '{type_legend},type,headline;{list_legend},listtype,listitems;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop',
		'table'                       => '{type_legend},type,headline;{table_legend},tableitems;{tconfig_legend},summary,thead,tfoot,tleft;{sortable_legend:hide},sortable;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop',
		'accordionStart'              => '{type_legend},type;{moo_legend},mooHeadline,mooStyle,mooClasses;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop',
		'accordionStop'               => '{type_legend},type;{moo_legend},mooClasses;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests;{invisible_legend:hide},invisible,start,stop',
		'accordionSingle'             => '{type_legend},type;{moo_legend},mooHeadline,mooStyle,mooClasses;{text_legend},text;{image_legend},addImage;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop',
		'sliderStart'                 => '{type_legend},type,headline;{slider_legend},sliderDelay,sliderSpeed,sliderStartSlide,sliderContinuous;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop',
		'sliderStop'                  => '{type_legend},type;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests;{invisible_legend:hide},invisible,start,stop',
		'code'                        => '{type_legend},type,headline;{text_legend},highlight,code;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop',
		'markdown'                    => '{type_legend},type,headline;{text_legend},code;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop',
		'hyperlink'                   => '{type_legend},type,headline;{link_legend},url,target,linkTitle,embed,titleText,rel;{imglink_legend:hide},useImage;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop',
		'toplink'                     => '{type_legend},type;{link_legend},linkTitle;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop',
		'image'                       => '{type_legend},type,headline;{source_legend},singleSRC,size,imagemargin,fullsize,overwriteMeta;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop',
		'gallery'                     => '{type_legend},type,headline;{source_legend},multiSRC,sortBy,metaIgnore;{image_legend},size,imagemargin,perRow,fullsize,perPage,numberOfItems;{template_legend:hide},galleryTpl,customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,useHomeDir;{invisible_legend:hide},invisible,start,stop',
		'player'                      => '{type_legend},type,headline;{source_legend},playerSRC;{poster_legend:hide},posterSRC;{player_legend},playerSize,autoplay;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop',
		'youtube'                     => '{type_legend},type,headline;{source_legend},youtube;{player_legend},playerSize,autoplay;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop',
		'vimeo'                       => '{type_legend},type,headline;{source_legend},vimeo;{player_legend},playerSize,autoplay;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop',
		'download'                    => '{type_legend},type,headline;{source_legend},singleSRC;{dwnconfig_legend},linkTitle,titleText;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop',
		'downloads'                   => '{type_legend},type,headline;{source_legend},multiSRC,sortBy,metaIgnore;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,useHomeDir;{invisible_legend:hide},invisible,start,stop',
		'alias'                       => '{type_legend},type;{include_legend},cteAlias;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop',
		'article'                     => '{type_legend},type;{include_legend},articleAlias;{protected_legend:hide},protected;{invisible_legend:hide},invisible,start,stop',
		'teaser'                      => '{type_legend},type;{include_legend},article;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop',
		'form'                        => '{type_legend},type,headline;{include_legend},form;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop',
		'module'                      => '{type_legend},type;{include_legend},module;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop'
	),

	// Subpalettes
	'subpalettes' => array
	(
		'addImage'                    => 'singleSRC,size,floating,imagemargin,fullsize,overwriteMeta',
		'sortable'                    => 'sortIndex,sortOrder',
		'useImage'                    => 'singleSRC,size,overwriteMeta',
		'overwriteMeta'               => 'alt,imageTitle,imageUrl,caption',
		'protected'                   => 'groups'
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
			'sql'                     => "int(10) unsigned NOT NULL default '0'"
		),
		'ptable' => array
		(
			'sql'                     => "varchar(64) NOT NULL default ''"
		),
		'sorting' => array
		(
			'sql'                     => "int(10) unsigned NOT NULL default '0'"
		),
		'tstamp' => array
		(
			'sql'                     => "int(10) unsigned NOT NULL default '0'"
		),
		'type' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['type'],
			'default'                 => 'text',
			'exclude'                 => true,
			'filter'                  => true,
			'inputType'               => 'select',
			'options_callback'        => array('tl_content', 'getContentElements'),
			'reference'               => &$GLOBALS['TL_LANG']['CTE'],
			'eval'                    => array('helpwizard'=>true, 'chosen'=>true, 'submitOnChange'=>true, 'tl_class'=>'w50'),
			'sql'                     => "varchar(64) NOT NULL default ''"
		),
		'headline' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['headline'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'inputUnit',
			'options'                 => array('h1', 'h2', 'h3', 'h4', 'h5', 'h6'),
			'eval'                    => array('maxlength'=>200, 'tl_class'=>'w50 clr'),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		'text' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['text'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'textarea',
			'eval'                    => array('mandatory'=>true, 'rte'=>'tinyMCE', 'helpwizard'=>true),
			'explanation'             => 'insertTags',
			'sql'                     => "mediumtext NULL"
		),
		'addImage' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['addImage'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('submitOnChange'=>true),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'overwriteMeta' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['overwriteMeta'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('submitOnChange'=>true, 'tl_class'=>'w50 clr'),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'singleSRC' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['singleSRC'],
			'exclude'                 => true,
			'inputType'               => 'fileTree',
			'eval'                    => array('filesOnly'=>true, 'fieldType'=>'radio', 'mandatory'=>true, 'tl_class'=>'clr'),
			'load_callback' => array
			(
				array('tl_content', 'setSingleSrcFlags')
			),
			'sql'                     => "binary(16) NULL"
		),
		'alt' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['alt'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		'imageTitle' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['imageTitle'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		'size' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['size'],
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
		'imagemargin' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['imagemargin'],
			'exclude'                 => true,
			'inputType'               => 'trbl',
			'options'                 => $GLOBALS['TL_CSS_UNITS'],
			'eval'                    => array('includeBlankOption'=>true, 'tl_class'=>'w50'),
			'sql'                     => "varchar(128) NOT NULL default ''"
		),
		'imageUrl' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['imageUrl'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'url', 'decodeEntities'=>true, 'maxlength'=>255, 'dcaPicker'=>true, 'tl_class'=>'w50 wizard'),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		'fullsize' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['fullsize'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50 m12'),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'caption' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['caption'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>255, 'allowHtml'=>true, 'tl_class'=>'w50'),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		'floating' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['floating'],
			'default'                 => 'above',
			'exclude'                 => true,
			'inputType'               => 'radioTable',
			'options'                 => array('above', 'left', 'right', 'below'),
			'eval'                    => array('cols'=>4, 'tl_class'=>'w50'),
			'reference'               => &$GLOBALS['TL_LANG']['MSC'],
			'sql'                     => "varchar(32) NOT NULL default ''"
		),
		'html' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['html'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'textarea',
			'eval'                    => array('mandatory'=>true, 'allowHtml'=>true, 'class'=>'monospace', 'rte'=>'ace|html', 'helpwizard'=>true),
			'explanation'             => 'insertTags',
			'sql'                     => "mediumtext NULL"
		),
		'listtype' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['listtype'],
			'exclude'                 => true,
			'inputType'               => 'select',
			'options'                 => array('ordered', 'unordered'),
			'eval'                    => array('tl_class'=>'w50'),
			'reference'               => &$GLOBALS['TL_LANG']['tl_content'],
			'sql'                     => "varchar(32) NOT NULL default ''"
		),
		'listitems' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['listitems'],
			'exclude'                 => true,
			'inputType'               => 'listWizard',
			'eval'                    => array('allowHtml'=>true, 'tl_class'=>'clr'),
			'xlabel' => array
			(
				array('tl_content', 'listImportWizard')
			),
			'sql'                     => "blob NULL"
		),
		'tableitems' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['tableitems'],
			'exclude'                 => true,
			'inputType'               => 'tableWizard',
			'eval'                    => array('allowHtml'=>true, 'doNotSaveEmpty'=>true, 'style'=>'width:142px;height:66px'),
			'xlabel' => array
			(
				array('tl_content', 'tableImportWizard')
			),
			'sql'                     => "mediumblob NULL"
		),
		'summary' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['summary'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		'thead' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['thead'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50 m12'),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'tfoot' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['tfoot'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'tleft' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['tleft'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'sortable' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['sortable'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('submitOnChange'=>true),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'sortIndex' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['sortIndex'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'natural', 'tl_class'=>'w50'),
			'sql'                     => "smallint(5) unsigned NOT NULL default '0'"
		),
		'sortOrder' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['sortOrder'],
			'default'                 => 'ascending',
			'exclude'                 => true,
			'inputType'               => 'select',
			'options'                 => array('ascending', 'descending'),
			'reference'               => &$GLOBALS['TL_LANG']['MSC'],
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "varchar(32) NOT NULL default ''"
		),
		'mooHeadline' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['mooHeadline'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>255, 'allowHtml'=>true, 'tl_class'=>'long'),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		'mooStyle' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['mooStyle'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>255, 'decodeEntities'=>true, 'tl_class'=>'w50'),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		'mooClasses' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['mooClasses'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('multiple'=>true, 'size'=>2, 'rgxp'=>'alnum', 'tl_class'=>'w50'),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		'highlight' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['highlight'],
			'exclude'                 => true,
			'inputType'               => 'select',
			'options'                 => array('Apache', 'Bash', 'C#', 'C++', 'CSS', 'Diff', 'HTML', 'HTTP', 'Ini', 'JSON', 'Java', 'JavaScript', 'Markdown', 'Nginx', 'Perl', 'PHP', 'PowerShell', 'Python', 'Ruby', 'SCSS', 'SQL', 'XML'),
			'eval'                    => array('includeBlankOption'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50'),
			'sql'                     => "varchar(32) NOT NULL default ''"
		),
		'code' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['code'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'textarea',
			'eval'                    => array('mandatory'=>true, 'preserveTags'=>true, 'decodeEntities'=>true, 'class'=>'monospace', 'rte'=>'ace', 'helpwizard'=>true, 'tl_class'=>'clr'),
			'explanation'             => 'insertTags',
			'load_callback' => array
			(
				array('tl_content', 'setRteSyntax')
			),
			'sql'                     => "text NULL"
		),
		'url' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['MSC']['url'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'rgxp'=>'url', 'decodeEntities'=>true, 'maxlength'=>255, 'dcaPicker'=>true, 'tl_class'=>'w50 wizard'),
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
		'titleText' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['titleText'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		'linkTitle' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['linkTitle'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		'embed' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['embed'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		'rel' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['rel'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>64, 'tl_class'=>'w50'),
			'sql'                     => "varchar(64) NOT NULL default ''"
		),
		'useImage' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['useImage'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('submitOnChange'=>true),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'multiSRC' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['multiSRC'],
			'exclude'                 => true,
			'inputType'               => 'fileTree',
			'eval'                    => array('multiple'=>true, 'fieldType'=>'checkbox', 'orderField'=>'orderSRC', 'files'=>true),
			'sql'                     => "blob NULL",
			'load_callback' => array
			(
				array('tl_content', 'setMultiSrcFlags')
			)
		),
		'orderSRC' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['orderSRC'],
			'sql'                     => "blob NULL"
		),
		'useHomeDir' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['useHomeDir'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50 m12'),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'perRow' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['perRow'],
			'default'                 => 4,
			'exclude'                 => true,
			'inputType'               => 'select',
			'options'                 => array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12),
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "smallint(5) unsigned NOT NULL default '0'"
		),
		'perPage' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['perPage'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'natural', 'tl_class'=>'w50'),
			'sql'                     => "smallint(5) unsigned NOT NULL default '0'"
		),
		'numberOfItems' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['numberOfItems'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'natural', 'tl_class'=>'w50'),
			'sql'                     => "smallint(5) unsigned NOT NULL default '0'"
		),
		'sortBy' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['sortBy'],
			'exclude'                 => true,
			'inputType'               => 'select',
			'options'                 => array('custom', 'name_asc', 'name_desc', 'date_asc', 'date_desc', 'random'),
			'reference'               => &$GLOBALS['TL_LANG']['tl_content'],
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "varchar(32) NOT NULL default ''"
		),
		'metaIgnore' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['metaIgnore'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50 m12'),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'galleryTpl' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['galleryTpl'],
			'exclude'                 => true,
			'inputType'               => 'select',
			'options_callback'        => array('tl_content', 'getGalleryTemplates'),
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "varchar(64) NOT NULL default ''"
		),
		'customTpl' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['customTpl'],
			'exclude'                 => true,
			'inputType'               => 'select',
			'options_callback'        => array('tl_content', 'getElementTemplates'),
			'eval'                    => array('includeBlankOption'=>true, 'chosen'=>true, 'tl_class'=>'w50'),
			'sql'                     => "varchar(64) NOT NULL default ''"
		),
		'playerSRC' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['playerSRC'],
			'exclude'                 => true,
			'inputType'               => 'fileTree',
			'eval'                    => array('multiple'=>true, 'fieldType'=>'checkbox', 'files'=>true, 'mandatory'=>true),
			'sql'                     => "blob NULL"
		),
		'youtube' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['youtube'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50'),
			'save_callback' => array
			(
				array('tl_content', 'extractYouTubeId')
			),
			'sql'                     => "varchar(16) NOT NULL default ''"
		),
		'vimeo' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['vimeo'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50'),
			'save_callback' => array
			(
				array('tl_content', 'extractVimeoId')
			),
			'sql'                     => "varchar(16) NOT NULL default ''"
		),
		'posterSRC' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['posterSRC'],
			'exclude'                 => true,
			'inputType'               => 'fileTree',
			'eval'                    => array('filesOnly'=>true, 'fieldType'=>'radio'),
			'sql'                     => "binary(16) NULL"
		),
		'playerSize' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['playerSize'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('multiple'=>true, 'size'=>2, 'rgxp'=>'natural', 'nospace'=>true, 'tl_class'=>'w50'),
			'sql'                     => "varchar(64) NOT NULL default ''"
		),
		'autoplay' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['autoplay'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50 m12'),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'sliderDelay' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['sliderDelay'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "int(10) unsigned NOT NULL default '0'"
		),
		'sliderSpeed' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['sliderSpeed'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "int(10) unsigned NOT NULL default '300'"
		),
		'sliderStartSlide' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['sliderStartSlide'],
			'default'                 => 0,
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "smallint(5) unsigned NOT NULL default '0'"
		),
		'sliderContinuous' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['sliderContinuous'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50 m12'),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'cteAlias' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['cteAlias'],
			'exclude'                 => true,
			'inputType'               => 'select',
			'options_callback'        => array('tl_content', 'getAlias'),
			'eval'                    => array('mandatory'=>true, 'chosen'=>true, 'submitOnChange'=>true, 'tl_class'=>'w50 wizard'),
			'wizard' => array
			(
				array('tl_content', 'editAlias')
			),
			'sql'                     => "int(10) unsigned NOT NULL default '0'"
		),
		'articleAlias' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['articleAlias'],
			'exclude'                 => true,
			'inputType'               => 'select',
			'options_callback'        => array('tl_content', 'getArticleAlias'),
			'eval'                    => array('mandatory'=>true, 'chosen'=>true, 'submitOnChange'=>true, 'tl_class'=>'w50 wizard'),
			'wizard' => array
			(
				array('tl_content', 'editArticleAlias')
			),
			'sql'                     => "int(10) unsigned NOT NULL default '0'"
		),
		'article' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['article'],
			'exclude'                 => true,
			'inputType'               => 'select',
			'options_callback'        => array('tl_content', 'getArticles'),
			'eval'                    => array('mandatory'=>true, 'chosen'=>true, 'submitOnChange'=>true, 'tl_class'=>'w50 wizard'),
			'wizard' => array
			(
				array('tl_content', 'editArticle')
			),
			'sql'                     => "int(10) unsigned NOT NULL default '0'"
		),
		'form' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['form'],
			'exclude'                 => true,
			'inputType'               => 'select',
			'options_callback'        => array('tl_content', 'getForms'),
			'eval'                    => array('mandatory'=>true, 'chosen'=>true, 'submitOnChange'=>true, 'tl_class'=>'w50 wizard'),
			'wizard' => array
			(
				array('tl_content', 'editForm')
			),
			'sql'                     => "int(10) unsigned NOT NULL default '0'"
		),
		'module' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['module'],
			'exclude'                 => true,
			'inputType'               => 'select',
			'options_callback'        => array('tl_content', 'getModules'),
			'eval'                    => array('mandatory'=>true, 'chosen'=>true, 'submitOnChange'=>true, 'tl_class'=>'w50 wizard'),
			'wizard' => array
			(
				array('tl_content', 'editModule')
			),
			'sql'                     => "int(10) unsigned NOT NULL default '0'"
		),
		'protected' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['protected'],
			'exclude'                 => true,
			'filter'                  => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('submitOnChange'=>true),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'groups' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['groups'],
			'exclude'                 => true,
			'filter'                  => true,
			'inputType'               => 'checkbox',
			'foreignKey'              => 'tl_member_group.name',
			'eval'                    => array('mandatory'=>true, 'multiple'=>true),
			'sql'                     => "blob NULL",
			'relation'                => array('type'=>'hasMany', 'load'=>'lazy')
		),
		'guests' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['guests'],
			'exclude'                 => true,
			'filter'                  => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'cssID' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['cssID'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('multiple'=>true, 'size'=>2, 'tl_class'=>'w50 clr'),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		'invisible' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['invisible'],
			'exclude'                 => true,
			'filter'                  => true,
			'inputType'               => 'checkbox',
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'start' => array
		(
			'exclude'                 => true,
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['start'],
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'datim', 'datepicker'=>true, 'tl_class'=>'w50 wizard'),
			'sql'                     => "varchar(10) NOT NULL default ''"
		),
		'stop' => array
		(
			'exclude'                 => true,
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['stop'],
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'datim', 'datepicker'=>true, 'tl_class'=>'w50 wizard'),
			'sql'                     => "varchar(10) NOT NULL default ''"
		)
	)
);

/**
 * Dynamically add the permission check and parent table (see #5241)
 */
if (Input::get('do') == 'article' || Input::get('do') == 'page')
{
	$GLOBALS['TL_DCA']['tl_content']['config']['ptable'] = 'tl_article';
	$GLOBALS['TL_DCA']['tl_content']['config']['onload_callback'][] = array('tl_content', 'checkPermission');
}

/**
 * Provide miscellaneous methods that are used by the data configuration array.
 *
 * @author Leo Feyer <https://github.com/leofeyer>
 */
class tl_content extends Backend
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
	 * Check permissions to edit table tl_content
	 */
	public function checkPermission()
	{
		/** @var Symfony\Component\HttpFoundation\Session\SessionInterface $objSession */
		$objSession = System::getContainer()->get('session');

		// Prevent deleting referenced elements (see #4898)
		if (Input::get('act') == 'deleteAll')
		{
			$objCes = $this->Database->prepare("SELECT cteAlias FROM tl_content WHERE (ptable='tl_article' OR ptable='') AND type='alias'")
									 ->execute();

			$session = $objSession->all();
			$session['CURRENT']['IDS'] = array_diff($session['CURRENT']['IDS'], $objCes->fetchEach('cteAlias'));
			$objSession->replace($session);
		}

		if ($this->User->isAdmin)
		{
			return;
		}

		// Get the pagemounts
		$pagemounts = array();

		foreach ($this->User->pagemounts as $root)
		{
			$pagemounts[] = $root;
			$pagemounts = array_merge($pagemounts, $this->Database->getChildRecords($root, 'tl_page'));
		}

		$pagemounts = array_unique($pagemounts);

		// Check the current action
		switch (Input::get('act'))
		{
			case '': // empty
			case 'paste':
			case 'create':
			case 'select':
				// Check access to the article
				$this->checkAccessToElement(CURRENT_ID, $pagemounts, true);
				break;

			case 'editAll':
			case 'deleteAll':
			case 'overrideAll':
			case 'cutAll':
			case 'copyAll':
				// Check access to the parent element if a content element is moved
				if (Input::get('act') == 'cutAll' || Input::get('act') == 'copyAll')
				{
					$this->checkAccessToElement(Input::get('pid'), $pagemounts, (Input::get('mode') == 2));
				}

				$objCes = $this->Database->prepare("SELECT id FROM tl_content WHERE (ptable='tl_article' OR ptable='') AND pid=?")
										 ->execute(CURRENT_ID);

				$session = $objSession->all();
				$session['CURRENT']['IDS'] = array_intersect((array) $session['CURRENT']['IDS'], $objCes->fetchEach('id'));
				$objSession->replace($session);
				break;

			case 'cut':
			case 'copy':
				// Check access to the parent element if a content element is moved
				$this->checkAccessToElement(Input::get('pid'), $pagemounts, (Input::get('mode') == 2));
				// no break

			default:
				// Check access to the content element
				$this->checkAccessToElement(Input::get('id'), $pagemounts);
				break;
		}
	}

	/**
	 * Check access to a particular content element
	 *
	 * @param integer $id
	 * @param array   $pagemounts
	 * @param boolean $blnIsPid
	 *
	 * @throws Contao\CoreBundle\Exception\AccessDeniedException
	 */
	protected function checkAccessToElement($id, $pagemounts, $blnIsPid=false)
	{
		if ($blnIsPid)
		{
			$objPage = $this->Database->prepare("SELECT p.id, p.pid, p.includeChmod, p.chmod, p.cuser, p.cgroup, a.id AS aid FROM tl_article a, tl_page p WHERE a.id=? AND a.pid=p.id")
									  ->limit(1)
									  ->execute($id);
		}
		else
		{
			$objPage = $this->Database->prepare("SELECT p.id, p.pid, p.includeChmod, p.chmod, p.cuser, p.cgroup, a.id AS aid FROM tl_content c, tl_article a, tl_page p WHERE c.id=? AND c.pid=a.id AND a.pid=p.id")
									  ->limit(1)
									  ->execute($id);
		}

		// Invalid ID
		if ($objPage->numRows < 1)
		{
			throw new Contao\CoreBundle\Exception\AccessDeniedException('Invalid content element ID ' . $id . '.');
		}

		// The page is not mounted
		if (!in_array($objPage->id, $pagemounts))
		{
			throw new Contao\CoreBundle\Exception\AccessDeniedException('Not enough permissions to modify article ID ' . $objPage->aid . ' on page ID ' . $objPage->id . '.');
		}

		// Not enough permissions to modify the article
		if (!$this->User->isAllowed(BackendUser::CAN_EDIT_ARTICLES, $objPage->row()))
		{
			throw new Contao\CoreBundle\Exception\AccessDeniedException('Not enough permissions to modify article ID ' . $objPage->aid . '.');
		}
	}

	/**
	 * Return all content elements as array
	 *
	 * @return array
	 */
	public function getContentElements()
	{
		$groups = array();

		foreach ($GLOBALS['TL_CTE'] as $k=>$v)
		{
			foreach (array_keys($v) as $kk)
			{
				$groups[$k][] = $kk;
			}
		}

		return $groups;
	}

	/**
	 * Return the group of a content element
	 *
	 * @param string $element
	 *
	 * @return string
	 */
	public function getContentElementGroup($element)
	{
		foreach ($GLOBALS['TL_CTE'] as $k=>$v)
		{
			foreach (array_keys($v) as $kk)
			{
				if ($kk == $element)
				{
					return $k;
				}
			}
		}

		return null;
	}

	/**
	 * Adjust the DCA by type
	 *
	 * @param object $dc
	 */
	public function adjustDcaByType($dc)
	{
		$objCte = ContentModel::findByPk($dc->id);

		if ($objCte === null)
		{
			return;
		}

		switch ($objCte->type)
		{
			case 'hyperlink':
				unset($GLOBALS['TL_DCA']['tl_content']['fields']['imageUrl']);
				break;

			case 'image':
				$GLOBALS['TL_DCA']['tl_content']['fields']['imagemargin']['eval']['tl_class'] .= ' clr';
				break;
		}
	}

	/**
	 * Show a hint if a JavaScript library needs to be included in the page layout
	 *
	 * @param object $dc
	 */
	public function showJsLibraryHint($dc)
	{
		if ($_POST || Input::get('act') != 'edit')
		{
			return;
		}

		// Return if the user cannot access the layout module (see #6190)
		if (!$this->User->hasAccess('themes', 'modules') || !$this->User->hasAccess('layout', 'themes'))
		{
			return;
		}

		$objCte = ContentModel::findByPk($dc->id);

		if ($objCte === null)
		{
			return;
		}

		switch ($objCte->type)
		{
			case 'code':
				Message::addInfo(sprintf($GLOBALS['TL_LANG']['tl_content']['includeTemplate'], 'js_highlight'));
				break;

			case 'gallery':
				Message::addInfo(sprintf($GLOBALS['TL_LANG']['tl_content']['includeTemplates'], 'moo_mediabox', 'j_colorbox'));
				break;

			case 'sliderStart':
			case 'sliderStop':
				Message::addInfo(sprintf($GLOBALS['TL_LANG']['tl_content']['includeTemplate'], 'js_slider'));
				break;

			case 'accordionSingle':
			case 'accordionStart':
			case 'accordionStop':
				Message::addInfo(sprintf($GLOBALS['TL_LANG']['tl_content']['includeTemplates'], 'moo_accordion', 'j_accordion'));
				break;

			case 'player':
				Message::addInfo(sprintf($GLOBALS['TL_LANG']['tl_content']['includeTemplate'], 'js_mediaelement'));
				break;

			case 'table':
				if ($objCte->sortable)
				{
					Message::addInfo(sprintf($GLOBALS['TL_LANG']['tl_content']['includeTemplates'], 'moo_tablesort', 'j_tablesort'));
				}
				break;
		}
	}

	/**
	 * Add the type of content element
	 *
	 * @param array $arrRow
	 *
	 * @return string
	 */
	public function addCteType($arrRow)
	{
		$key = $arrRow['invisible'] ? 'unpublished' : 'published';
		$type = $GLOBALS['TL_LANG']['CTE'][$arrRow['type']][0] ?: '&nbsp;';
		$class = 'limit_height';

		// Remove the class if it is a wrapper element
		if (in_array($arrRow['type'], $GLOBALS['TL_WRAPPERS']['start']) || in_array($arrRow['type'], $GLOBALS['TL_WRAPPERS']['separator']) || in_array($arrRow['type'], $GLOBALS['TL_WRAPPERS']['stop']))
		{
			$class = '';

			if (($group = $this->getContentElementGroup($arrRow['type'])) !== null)
			{
				$type = $GLOBALS['TL_LANG']['CTE'][$group] . ' (' . $type . ')';
			}
		}

		// Add the group name if it is a single element (see #5814)
		elseif (in_array($arrRow['type'], $GLOBALS['TL_WRAPPERS']['single']))
		{
			if (($group = $this->getContentElementGroup($arrRow['type'])) !== null)
			{
				$type = $GLOBALS['TL_LANG']['CTE'][$group] . ' (' . $type . ')';
			}
		}

		// Add the ID of the aliased element
		if ($arrRow['type'] == 'alias')
		{
			$type .= ' ID ' . $arrRow['cteAlias'];
		}

		// Add the protection status
		if ($arrRow['protected'])
		{
			$type .= ' (' . $GLOBALS['TL_LANG']['MSC']['protected'] . ')';
		}
		elseif ($arrRow['guests'])
		{
			$type .= ' (' . $GLOBALS['TL_LANG']['MSC']['guests'] . ')';
		}

		// Add the headline level (see #5858)
		if ($arrRow['type'] == 'headline')
		{
			if (is_array($headline = StringUtil::deserialize($arrRow['headline'])))
			{
				$type .= ' (' . $headline['unit'] . ')';
			}
		}

		// Limit the element's height
		if (!Config::get('doNotCollapse'))
		{
			$class .=  ' h40';
		}

		$objModel = new ContentModel();
		$objModel->setRow($arrRow);

		return '
<div class="cte_type ' . $key . '">' . $type . '</div>
<div class="' . trim($class) . '">
' . StringUtil::insertTagToSrc($this->getContentElement($objModel)) . '
</div>' . "\n";
	}

	/**
	 * Return the edit article alias wizard
	 *
	 * @param DataContainer $dc
	 *
	 * @return string
	 */
	public function editArticleAlias(DataContainer $dc)
	{
		return ($dc->value < 1) ? '' : ' <a href="contao/main.php?do=article&amp;table=tl_content&amp;id=' . $dc->value . '&amp;popup=1&amp;nb=1&amp;rt=' . REQUEST_TOKEN . '" title="' . sprintf(StringUtil::specialchars($GLOBALS['TL_LANG']['tl_content']['editalias'][1]), $dc->value) . '" onclick="Backend.openModalIframe({\'title\':\'' . StringUtil::specialchars(str_replace("'", "\\'", sprintf($GLOBALS['TL_LANG']['tl_content']['editalias'][1], $dc->value))) . '\',\'url\':this.href});return false">' . Image::getHtml('alias.svg', $GLOBALS['TL_LANG']['tl_content']['editalias'][0]) . '</a>';
	}

	/**
	 * Get all articles and return them as array (article alias)
	 *
	 * @param DataContainer $dc
	 *
	 * @return array
	 */
	public function getArticleAlias(DataContainer $dc)
	{
		$arrPids = array();
		$arrAlias = array();

		if (!$this->User->isAdmin)
		{
			foreach ($this->User->pagemounts as $id)
			{
				$arrPids[] = $id;
				$arrPids = array_merge($arrPids, $this->Database->getChildRecords($id, 'tl_page'));
			}

			if (empty($arrPids))
			{
				return $arrAlias;
			}

			$objAlias = $this->Database->prepare("SELECT a.id, a.pid, a.title, a.inColumn, p.title AS parent FROM tl_article a LEFT JOIN tl_page p ON p.id=a.pid WHERE a.pid IN(" . implode(',', array_map('\intval', array_unique($arrPids))) . ") AND a.id!=(SELECT pid FROM tl_content WHERE id=?) ORDER BY parent, a.sorting")
									   ->execute($dc->id);
		}
		else
		{
			$objAlias = $this->Database->prepare("SELECT a.id, a.pid, a.title, a.inColumn, p.title AS parent FROM tl_article a LEFT JOIN tl_page p ON p.id=a.pid WHERE a.id!=(SELECT pid FROM tl_content WHERE id=?) ORDER BY parent, a.sorting")
									   ->execute($dc->id);
		}

		if ($objAlias->numRows)
		{
			System::loadLanguageFile('tl_article');

			while ($objAlias->next())
			{
				$key = $objAlias->parent . ' (ID ' . $objAlias->pid . ')';
				$arrAlias[$key][$objAlias->id] = $objAlias->title . ' (' . ($GLOBALS['TL_LANG']['COLS'][$objAlias->inColumn] ?: $objAlias->inColumn) . ', ID ' . $objAlias->id . ')';
			}
		}

		return $arrAlias;
	}

	/**
	 * Return the edit alias wizard
	 *
	 * @param DataContainer $dc
	 *
	 * @return string
	 */
	public function editAlias(DataContainer $dc)
	{
		return ($dc->value < 1) ? '' : ' <a href="contao/main.php?do=article&amp;table=tl_content&amp;act=edit&amp;id=' . $dc->value . '&amp;popup=1&amp;nb=1&amp;rt=' . REQUEST_TOKEN . '" title="' . sprintf(StringUtil::specialchars($GLOBALS['TL_LANG']['tl_content']['editalias'][1]), $dc->value) . '" onclick="Backend.openModalIframe({\'title\':\'' . StringUtil::specialchars(str_replace("'", "\\'", sprintf($GLOBALS['TL_LANG']['tl_content']['editalias'][1], $dc->value))) . '\',\'url\':this.href});return false">' . Image::getHtml('alias.svg', $GLOBALS['TL_LANG']['tl_content']['editalias'][0]) . '</a>';
	}

	/**
	 * Get all content elements and return them as array (content element alias)
	 *
	 * @return array
	 */
	public function getAlias()
	{
		$arrPids = array();
		$arrAlias = array();

		if (!$this->User->isAdmin)
		{
			foreach ($this->User->pagemounts as $id)
			{
				$arrPids[] = $id;
				$arrPids = array_merge($arrPids, $this->Database->getChildRecords($id, 'tl_page'));
			}

			if (empty($arrPids))
			{
				return $arrAlias;
			}

			$objAlias = $this->Database->prepare("SELECT c.id, c.pid, c.type, (CASE c.type WHEN 'module' THEN m.name WHEN 'form' THEN f.title WHEN 'table' THEN c.summary ELSE c.headline END) AS headline, c.text, a.title FROM tl_content c LEFT JOIN tl_article a ON a.id=c.pid LEFT JOIN tl_module m ON m.id=c.module LEFT JOIN tl_form f on f.id=c.form WHERE a.pid IN(" . implode(',', array_map('\intval', array_unique($arrPids))) . ") AND (c.ptable='tl_article' OR c.ptable='') AND c.id!=? ORDER BY a.title, c.sorting")
									   ->execute(Input::get('id'));
		}
		else
		{
			$objAlias = $this->Database->prepare("SELECT c.id, c.pid, c.type, (CASE c.type WHEN 'module' THEN m.name WHEN 'form' THEN f.title WHEN 'table' THEN c.summary ELSE c.headline END) AS headline, c.text, a.title FROM tl_content c LEFT JOIN tl_article a ON a.id=c.pid LEFT JOIN tl_module m ON m.id=c.module LEFT JOIN tl_form f on f.id=c.form WHERE (c.ptable='tl_article' OR c.ptable='') AND c.id!=? ORDER BY a.title, c.sorting")
									   ->execute(Input::get('id'));
		}

		while ($objAlias->next())
		{
			$arrHeadline = StringUtil::deserialize($objAlias->headline, true);

			if (isset($arrHeadline['value']))
			{
				$headline = StringUtil::substr($arrHeadline['value'], 32);
			}
			else
			{
				$headline = StringUtil::substr(preg_replace('/[\n\r\t]+/', ' ', $arrHeadline[0]), 32);
			}

			$text = StringUtil::substr(strip_tags(preg_replace('/[\n\r\t]+/', ' ', $objAlias->text)), 32);
			$strText = $GLOBALS['TL_LANG']['CTE'][$objAlias->type][0] . ' (';

			if ($headline != '')
			{
				$strText .= $headline . ', ';
			}
			elseif ($text != '')
			{
				$strText .= $text . ', ';
			}

			$key = $objAlias->title . ' (ID ' . $objAlias->pid . ')';
			$arrAlias[$key][$objAlias->id] = $strText . 'ID ' . $objAlias->id . ')';
		}

		return $arrAlias;
	}

	/**
	 * Return the edit form wizard
	 *
	 * @param DataContainer $dc
	 *
	 * @return string
	 */
	public function editForm(DataContainer $dc)
	{
		return ($dc->value < 1) ? '' : ' <a href="contao/main.php?do=form&amp;table=tl_form_field&amp;id=' . $dc->value . '&amp;popup=1&amp;nb=1&amp;rt=' . REQUEST_TOKEN . '" title="' . sprintf(StringUtil::specialchars($GLOBALS['TL_LANG']['tl_content']['editalias'][1]), $dc->value) . '" onclick="Backend.openModalIframe({\'title\':\'' . StringUtil::specialchars(str_replace("'", "\\'", sprintf($GLOBALS['TL_LANG']['tl_content']['editalias'][1], $dc->value))) . '\',\'url\':this.href});return false">' . Image::getHtml('alias.svg', $GLOBALS['TL_LANG']['tl_content']['editalias'][0]) . '</a>';
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
				$arrForms[$objForms->id] = $objForms->title . ' (ID ' . $objForms->id . ')';
			}
		}

		return $arrForms;
	}

	/**
	 * Return the edit module wizard
	 *
	 * @param DataContainer $dc
	 *
	 * @return string
	 */
	public function editModule(DataContainer $dc)
	{
		return ($dc->value < 1) ? '' : ' <a href="contao/main.php?do=themes&amp;table=tl_module&amp;act=edit&amp;id=' . $dc->value . '&amp;popup=1&amp;nb=1&amp;rt=' . REQUEST_TOKEN . '" title="' . sprintf(StringUtil::specialchars($GLOBALS['TL_LANG']['tl_content']['editalias'][1]), $dc->value) . '" onclick="Backend.openModalIframe({\'title\':\'' . StringUtil::specialchars(str_replace("'", "\\'", sprintf($GLOBALS['TL_LANG']['tl_content']['editalias'][1], $dc->value))) . '\',\'url\':this.href});return false">' . Image::getHtml('alias.svg', $GLOBALS['TL_LANG']['tl_content']['editalias'][0]) . '</a>';
	}

	/**
	 * Get all modules and return them as array
	 *
	 * @return array
	 */
	public function getModules()
	{
		$arrModules = array();
		$objModules = $this->Database->execute("SELECT m.id, m.name, t.name AS theme FROM tl_module m LEFT JOIN tl_theme t ON m.pid=t.id ORDER BY t.name, m.name");

		while ($objModules->next())
		{
			$arrModules[$objModules->theme][$objModules->id] = $objModules->name . ' (ID ' . $objModules->id . ')';
		}

		return $arrModules;
	}

	/**
	 * Return all gallery templates as array
	 *
	 * @return array
	 */
	public function getGalleryTemplates()
	{
		return $this->getTemplateGroup('gallery_');
	}

	/**
	 * Return all content element templates as array
	 *
	 * @param DataContainer $dc
	 *
	 * @return array
	 */
	public function getElementTemplates(DataContainer $dc)
	{
		return $this->getTemplateGroup('ce_' . $dc->activeRecord->type);
	}

	/**
	 * Return the edit article teaser wizard
	 *
	 * @param DataContainer $dc
	 *
	 * @return string
	 */
	public function editArticle(DataContainer $dc)
	{
		return ($dc->value < 1) ? '' : ' <a href="contao/main.php?do=article&amp;table=tl_content&amp;id=' . $dc->value . '&amp;popup=1&amp;nb=1&amp;rt=' . REQUEST_TOKEN . '" title="' . sprintf(StringUtil::specialchars($GLOBALS['TL_LANG']['tl_content']['editarticle'][1]), $dc->value) . '" onclick="Backend.openModalIframe({\'title\':\'' . StringUtil::specialchars(str_replace("'", "\\'", sprintf($GLOBALS['TL_LANG']['tl_content']['editarticle'][1], $dc->value))) . '\',\'url\':this.href});return false">' . Image::getHtml('alias.svg', $GLOBALS['TL_LANG']['tl_content']['editarticle'][0]) . '</a>';
	}

	/**
	 * Get all articles and return them as array (article teaser)
	 *
	 * @param DataContainer $dc
	 *
	 * @return array
	 */
	public function getArticles(DataContainer $dc)
	{
		$arrPids = array();
		$arrArticle = array();
		$arrRoot = array();
		$intPid = $dc->activeRecord->pid;

		if (Input::get('act') == 'overrideAll')
		{
			$intPid = Input::get('id');
		}

		// Limit pages to the website root
		$objArticle = $this->Database->prepare("SELECT pid FROM tl_article WHERE id=?")
									 ->limit(1)
									 ->execute($intPid);

		if ($objArticle->numRows)
		{
			$objPage = PageModel::findWithDetails($objArticle->pid);
			$arrRoot = $this->Database->getChildRecords($objPage->rootId, 'tl_page');
			array_unshift($arrRoot, $objPage->rootId);
		}

		unset($objArticle);

		// Limit pages to the user's pagemounts
		if ($this->User->isAdmin)
		{
			$objArticle = $this->Database->execute("SELECT a.id, a.pid, a.title, a.inColumn, p.title AS parent FROM tl_article a LEFT JOIN tl_page p ON p.id=a.pid" . (!empty($arrRoot) ? " WHERE a.pid IN(" . implode(',', array_map('\intval', array_unique($arrRoot))) . ")" : "") . " ORDER BY parent, a.sorting");
		}
		else
		{
			foreach ($this->User->pagemounts as $id)
			{
				if (!in_array($id, $arrRoot))
				{
					continue;
				}

				$arrPids[] = $id;
				$arrPids = array_merge($arrPids, $this->Database->getChildRecords($id, 'tl_page'));
			}

			if (empty($arrPids))
			{
				return $arrArticle;
			}

			$objArticle = $this->Database->execute("SELECT a.id, a.pid, a.title, a.inColumn, p.title AS parent FROM tl_article a LEFT JOIN tl_page p ON p.id=a.pid WHERE a.pid IN(" . implode(',', array_map('\intval', array_unique($arrPids))) . ") ORDER BY parent, a.sorting");
		}

		// Edit the result
		if ($objArticle->numRows)
		{
			System::loadLanguageFile('tl_article');

			while ($objArticle->next())
			{
				$key = $objArticle->parent . ' (ID ' . $objArticle->pid . ')';
				$arrArticle[$key][$objArticle->id] = $objArticle->title . ' (' . ($GLOBALS['TL_LANG']['COLS'][$objArticle->inColumn] ?: $objArticle->inColumn) . ', ID ' . $objArticle->id . ')';
			}
		}

		return $arrArticle;
	}

	/**
	 * Dynamically set the ace syntax
	 *
	 * @param mixed         $varValue
	 * @param DataContainer $dc
	 *
	 * @return string
	 */
	public function setRteSyntax($varValue, DataContainer $dc)
	{
		switch ($dc->activeRecord->highlight)
		{
			case 'C':
			case 'CSharp':
				$syntax = 'c_cpp';
				break;

			case 'CSS':
			case 'Diff':
			case 'Groovy':
			case 'HTML':
			case 'Java':
			case 'JavaScript':
			case 'Perl':
			case 'PHP':
			case 'PowerShell':
			case 'Python':
			case 'Ruby':
			case 'Scala':
			case 'SQL':
			case 'Text':
				$syntax = strtolower($dc->activeRecord->highlight);
				break;

			case 'VB':
				$syntax = 'vbscript';
				break;

			case 'XML':
			case 'XHTML':
				$syntax = 'xml';
				break;

			default:
				$syntax = 'text';
				break;
		}

		if ($dc->activeRecord->type == 'markdown')
		{
			$syntax = 'markdown';
		}

		$GLOBALS['TL_DCA']['tl_content']['fields']['code']['eval']['rte'] = 'ace|' . $syntax;

		return $varValue;
	}

	/**
	 * Add a link to the list items import wizard
	 *
	 * @return string
	 */
	public function listImportWizard()
	{
		return ' <a href="' . $this->addToUrl('key=list') . '" title="' . StringUtil::specialchars($GLOBALS['TL_LANG']['MSC']['lw_import'][1]) . '" onclick="Backend.getScrollOffset()">' . Image::getHtml('tablewizard.svg', $GLOBALS['TL_LANG']['MSC']['tw_import'][0]) . '</a>';
	}

	/**
	 * Add a link to the table items import wizard
	 *
	 * @return string
	 */
	public function tableImportWizard()
	{
		return ' <a href="' . $this->addToUrl('key=table') . '" title="' . StringUtil::specialchars($GLOBALS['TL_LANG']['MSC']['tw_import'][1]) . '" onclick="Backend.getScrollOffset()">' . Image::getHtml('tablewizard.svg', $GLOBALS['TL_LANG']['MSC']['tw_import'][0]) . '</a> ' . Image::getHtml('demagnify.svg', '', 'title="' . StringUtil::specialchars($GLOBALS['TL_LANG']['MSC']['tw_shrink']) . '" style="cursor:pointer" onclick="Backend.tableWizardResize(0.9)"') . Image::getHtml('magnify.svg', '', 'title="' . StringUtil::specialchars($GLOBALS['TL_LANG']['MSC']['tw_expand']) . '" style="cursor:pointer" onclick="Backend.tableWizardResize(1.1)"');
	}

	/**
	 * Return the link picker wizard
	 *
	 * @param DataContainer $dc
	 *
	 * @return string
	 *
	 * @deprecated Deprecated since Contao 4.4, to be removed in Contao 5.
	 *             Set the "dcaPicker" eval attribute instead.
	 */
	public function pagePicker(DataContainer $dc)
	{
		@trigger_error('Using tl_content::pagePicker() has been deprecated and will no longer work in Contao 5.0. Set the "dcaPicker" eval attribute instead.', E_USER_DEPRECATED);

		return Backend::getDcaPickerWizard(true, $dc->table, $dc->field, $dc->inputName);
	}

	/**
	 * Return the delete content element button
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
	public function deleteElement($row, $href, $label, $title, $icon, $attributes)
	{
		$objElement = $this->Database->prepare("SELECT id FROM tl_content WHERE cteAlias=? AND type='alias'")
									 ->limit(1)
									 ->execute($row['id']);

		return $objElement->numRows ? Image::getHtml(preg_replace('/\.svg$/i', '_.svg', $icon)) . ' ' : '<a href="' . $this->addToUrl($href . '&amp;id=' . $row['id']) . '" title="' . StringUtil::specialchars($title) . '"' . $attributes . '>' . Image::getHtml($icon, $label) . '</a> ';
	}

	/**
	 * Dynamically add flags to the "singleSRC" field
	 *
	 * @param mixed         $varValue
	 * @param DataContainer $dc
	 *
	 * @return mixed
	 */
	public function setSingleSrcFlags($varValue, DataContainer $dc)
	{
		if ($dc->activeRecord)
		{
			switch ($dc->activeRecord->type)
			{
				case 'text':
				case 'hyperlink':
				case 'image':
				case 'accordionSingle':
					$GLOBALS['TL_DCA'][$dc->table]['fields'][$dc->field]['eval']['extensions'] = Config::get('validImageTypes');
					break;

				case 'download':
					$GLOBALS['TL_DCA'][$dc->table]['fields'][$dc->field]['eval']['extensions'] = Config::get('allowedDownload');
					break;
			}
		}

		return $varValue;
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
			switch ($dc->activeRecord->type)
			{
				case 'gallery':
					$GLOBALS['TL_DCA'][$dc->table]['fields'][$dc->field]['eval']['isGallery'] = true;
					$GLOBALS['TL_DCA'][$dc->table]['fields'][$dc->field]['eval']['extensions'] = Config::get('validImageTypes');
					break;

				case 'downloads':
					$GLOBALS['TL_DCA'][$dc->table]['fields'][$dc->field]['eval']['isDownloads'] = true;
					$GLOBALS['TL_DCA'][$dc->table]['fields'][$dc->field]['eval']['extensions'] = Config::get('allowedDownload');
					break;
			}
		}

		return $varValue;
	}

	/**
	 * Extract the YouTube ID from an URL
	 *
	 * @param mixed         $varValue
	 * @param DataContainer $dc
	 *
	 * @return mixed
	 */
	public function extractYouTubeId($varValue, DataContainer $dc)
	{
		if ($dc->activeRecord->youtube != $varValue)
		{
			$matches = array();

			if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $varValue, $matches))
			{
				$varValue = $matches[1];
			}
		}

		return $varValue;
	}

	/**
	 * Extract the Vimeo ID from an URL
	 *
	 * @param mixed         $varValue
	 * @param DataContainer $dc
	 *
	 * @return mixed
	 */
	public function extractVimeoId($varValue, DataContainer $dc)
	{
		if ($dc->activeRecord->vimeo != $varValue)
		{
			$matches = array();

			if (preg_match('%vimeo\.com/(?:channels/(?:\w+/)?|groups/(?:[^/]+)/videos/|album/(?:\d+)/video/)?(\d+)(?:$|/|\?)%i', $varValue, $matches))
			{
				$varValue = $matches[1];
			}
		}

		return $varValue;
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
		if (!$this->User->hasAccess('tl_content::invisible', 'alexf'))
		{
			return '';
		}

		$href .= '&amp;id=' . Input::get('id') . '&amp;tid=' . $row['id'] . '&amp;state=' . $row['invisible'];

		if ($row['invisible'])
		{
			$icon = 'invisible.svg';
		}

		return '<a href="' . $this->addToUrl($href) . '" title="' . StringUtil::specialchars($title) . '"' . $attributes . '>' . Image::getHtml($icon, $label, 'data-state="' . ($row['invisible'] ? 0 : 1) . '"') . '</a> ';
	}

	/**
	 * Toggle the visibility of an element
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
		if (is_array($GLOBALS['TL_DCA']['tl_content']['config']['onload_callback']))
		{
			foreach ($GLOBALS['TL_DCA']['tl_content']['config']['onload_callback'] as $callback)
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
		if (!$this->User->hasAccess('tl_content::invisible', 'alexf'))
		{
			throw new Contao\CoreBundle\Exception\AccessDeniedException('Not enough permissions to show/hide content element ID ' . $intId . '.');
		}

		// Set the current record
		if ($dc)
		{
			$objRow = $this->Database->prepare("SELECT * FROM tl_content WHERE id=?")
									 ->limit(1)
									 ->execute($intId);

			if ($objRow->numRows)
			{
				$dc->activeRecord = $objRow;
			}
		}

		$objVersions = new Versions('tl_content', $intId);
		$objVersions->initialize();

		// Reverse the logic (elements have invisible=1)
		$blnVisible = !$blnVisible;

		// Trigger the save_callback
		if (is_array($GLOBALS['TL_DCA']['tl_content']['fields']['invisible']['save_callback']))
		{
			foreach ($GLOBALS['TL_DCA']['tl_content']['fields']['invisible']['save_callback'] as $callback)
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
		$this->Database->prepare("UPDATE tl_content SET tstamp=$time, invisible='" . ($blnVisible ? '1' : '') . "' WHERE id=?")
					   ->execute($intId);

		if ($dc)
		{
			$dc->activeRecord->tstamp = $time;
			$dc->activeRecord->invisible = ($blnVisible ? '1' : '');
		}

		// Trigger the onsubmit_callback
		if (is_array($GLOBALS['TL_DCA']['tl_content']['config']['onsubmit_callback']))
		{
			foreach ($GLOBALS['TL_DCA']['tl_content']['config']['onsubmit_callback'] as $callback)
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

// Dynamically add the permission check and parent table
if (Input::get('do') == 'news')
{
	$GLOBALS['TL_DCA']['tl_content']['config']['ptable'] = 'tl_news';
	$GLOBALS['TL_DCA']['tl_content']['config']['onload_callback'][] = array('tl_content_news', 'checkPermission');
	$GLOBALS['TL_DCA']['tl_content']['config']['onload_callback'][] = array('tl_content_news', 'generateFeed');
	$GLOBALS['TL_DCA']['tl_content']['list']['operations']['toggle']['button_callback'] = array('tl_content_news', 'toggleIcon');
}

/**
 * Provide miscellaneous methods that are used by the data configuration array.
 *
 * @property Contao\News $News
 *
 * @author Leo Feyer <https://github.com/leofeyer>
 */
class tl_content_news extends Backend
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
	 * Check permissions to edit table tl_content
	 */
	public function checkPermission()
	{
		if ($this->User->isAdmin)
		{
			return;
		}

		// Set the root IDs
		if (empty($this->User->news) || !is_array($this->User->news))
		{
			$root = array(0);
		}
		else
		{
			$root = $this->User->news;
		}

		// Check the current action
		switch (Input::get('act'))
		{
			case '': // empty
			case 'paste':
			case 'create':
			case 'select':
				// Check access to the news item
				$this->checkAccessToElement(CURRENT_ID, $root, true);
				break;

			case 'editAll':
			case 'deleteAll':
			case 'overrideAll':
			case 'cutAll':
			case 'copyAll':
				// Check access to the parent element if a content element is moved
				if (Input::get('act') == 'cutAll' || Input::get('act') == 'copyAll')
				{
					$this->checkAccessToElement(Input::get('pid'), $root, (Input::get('mode') == 2));
				}

				$objCes = $this->Database->prepare("SELECT id FROM tl_content WHERE ptable='tl_news' AND pid=?")
										 ->execute(CURRENT_ID);

				/** @var Symfony\Component\HttpFoundation\Session\SessionInterface $objSession */
				$objSession = System::getContainer()->get('session');

				$session = $objSession->all();
				$session['CURRENT']['IDS'] = array_intersect((array) $session['CURRENT']['IDS'], $objCes->fetchEach('id'));
				$objSession->replace($session);
				break;

			case 'cut':
			case 'copy':
				// Check access to the parent element if a content element is moved
				$this->checkAccessToElement(Input::get('pid'), $root, (Input::get('mode') == 2));
				// no break

			default:
				// Check access to the content element
				$this->checkAccessToElement(Input::get('id'), $root);
				break;
		}
	}

	/**
	 * Check access to a particular content element
	 *
	 * @param integer $id
	 * @param array   $root
	 * @param boolean $blnIsPid
	 *
	 * @throws Contao\CoreBundle\Exception\AccessDeniedException
	 */
	protected function checkAccessToElement($id, $root, $blnIsPid=false)
	{
		if ($blnIsPid)
		{
			$objArchive = $this->Database->prepare("SELECT a.id, n.id AS nid FROM tl_news n, tl_news_archive a WHERE n.id=? AND n.pid=a.id")
										 ->limit(1)
										 ->execute($id);
		}
		else
		{
			$objArchive = $this->Database->prepare("SELECT a.id, n.id AS nid FROM tl_content c, tl_news n, tl_news_archive a WHERE c.id=? AND c.pid=n.id AND n.pid=a.id")
										 ->limit(1)
										 ->execute($id);
		}

		// Invalid ID
		if ($objArchive->numRows < 1)
		{
			throw new Contao\CoreBundle\Exception\AccessDeniedException('Invalid news content element ID ' . $id . '.');
		}

		// The news archive is not mounted
		if (!in_array($objArchive->id, $root))
		{
			throw new Contao\CoreBundle\Exception\AccessDeniedException('Not enough permissions to modify article ID ' . $objArchive->nid . ' in news archive ID ' . $objArchive->id . '.');
		}
	}

	/**
	 * Check for modified news feeds and update the XML files if necessary
	 */
	public function generateFeed()
	{
		/** @var Symfony\Component\HttpFoundation\Session\SessionInterface $objSession */
		$objSession = System::getContainer()->get('session');

		$session = $objSession->get('news_feed_updater');

		if (empty($session) || !is_array($session))
		{
			return;
		}

		$this->import('News');

		foreach ($session as $id)
		{
			$this->News->generateFeedsByArchive($id);
		}

		$this->import('Automator');
		$this->Automator->generateSitemap();

		$objSession->set('news_feed_updater', null);
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
		if (!$this->User->hasAccess('tl_content::invisible', 'alexf'))
		{
			return '';
		}

		$href .= '&amp;id=' . Input::get('id') . '&amp;tid=' . $row['id'] . '&amp;state=' . $row['invisible'];

		if ($row['invisible'])
		{
			$icon = 'invisible.svg';
		}

		return '<a href="' . $this->addToUrl($href) . '" title="' . StringUtil::specialchars($title) . '"' . $attributes . '>' . Image::getHtml($icon, $label, 'data-state="' . ($row['invisible'] ? 0 : 1) . '"') . '</a> ';
	}

	/**
	 * Toggle the visibility of an element
	 *
	 * @param integer       $intId
	 * @param boolean       $blnVisible
	 * @param DataContainer $dc
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
		if (is_array($GLOBALS['TL_DCA']['tl_content']['config']['onload_callback']))
		{
			foreach ($GLOBALS['TL_DCA']['tl_content']['config']['onload_callback'] as $callback)
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
		if (!$this->User->hasAccess('tl_content::invisible', 'alexf'))
		{
			throw new Contao\CoreBundle\Exception\AccessDeniedException('Not enough permissions to publish/unpublish content element ID ' . $intId . '.');
		}

		// Set the current record
		if ($dc)
		{
			$objRow = $this->Database->prepare("SELECT * FROM tl_content WHERE id=?")
									 ->limit(1)
									 ->execute($intId);

			if ($objRow->numRows)
			{
				$dc->activeRecord = $objRow;
			}
		}

		$objVersions = new Versions('tl_content', $intId);
		$objVersions->initialize();

		// Reverse the logic (elements have invisible=1)
		$blnVisible = !$blnVisible;

		// Trigger the save_callback
		if (is_array($GLOBALS['TL_DCA']['tl_content']['fields']['invisible']['save_callback']))
		{
			foreach ($GLOBALS['TL_DCA']['tl_content']['fields']['invisible']['save_callback'] as $callback)
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
		$this->Database->prepare("UPDATE tl_content SET tstamp=$time, invisible='" . ($blnVisible ? '1' : '') . "' WHERE id=?")
					   ->execute($intId);

		if ($dc)
		{
			$dc->activeRecord->tstamp = $time;
			$dc->activeRecord->invisible = ($blnVisible ? '1' : '');
		}

		// Trigger the onsubmit_callback
		if (is_array($GLOBALS['TL_DCA']['tl_content']['config']['onsubmit_callback']))
		{
			foreach ($GLOBALS['TL_DCA']['tl_content']['config']['onsubmit_callback'] as $callback)
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
 * RockSolid Columns DCA
 *
 * @author Martin Auswöger <martin@madeyourday.net>
 */

if (TL_MODE === 'BE') {
	$GLOBALS['TL_CSS'][] = 'bundles/rocksolidcolumns/css/be_main.css';
}

$GLOBALS['TL_DCA']['tl_content']['config']['onsubmit_callback'][] = array('MadeYourDay\\RockSolidColumns\\Columns', 'onsubmitCallback');

$GLOBALS['TL_DCA']['tl_content']['palettes']['rs_columns_start'] = '{type_legend},type,headline;{rs_columns_legend},rs_columns_large,rs_columns_medium,rs_columns_small;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop';
$GLOBALS['TL_DCA']['tl_content']['palettes']['rs_columns_stop'] = '{type_legend},type;{protected_legend:hide},protected;{expert_legend:hide},guests;{invisible_legend:hide},invisible,start,stop';
$GLOBALS['TL_DCA']['tl_content']['palettes']['rs_column_start'] = '{type_legend},type,headline;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop';
$GLOBALS['TL_DCA']['tl_content']['palettes']['rs_column_stop'] = '{type_legend},type;{protected_legend:hide},protected;{expert_legend:hide},guests;{invisible_legend:hide},invisible,start,stop';

$GLOBALS['TL_DCA']['tl_content']['fields']['rs_columns_large'] = array(
	'inputType' => 'text',
	'label' => &$GLOBALS['TL_LANG']['tl_content']['rs_columns_large'],
	'eval' => array(
		'tl_class' => 'rs_columns_w33',
	),
	'sql' => "varchar(255) NOT NULL default ''",
);
$GLOBALS['TL_DCA']['tl_content']['fields']['rs_columns_medium'] = array(
	'inputType' => 'text',
	'label' => &$GLOBALS['TL_LANG']['tl_content']['rs_columns_medium'],
	'eval' => array(
		'tl_class' => 'rs_columns_w33',
	),
	'sql' => "varchar(255) NOT NULL default ''",
);
$GLOBALS['TL_DCA']['tl_content']['fields']['rs_columns_small'] = array(
	'inputType' => 'text',
	'label' => &$GLOBALS['TL_LANG']['tl_content']['rs_columns_small'],
	'eval' => array(
		'tl_class' => 'rs_columns_w33',
	),
	'sql' => "varchar(255) NOT NULL default ''",
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
 * RockSolid Custom Elements DCA
 *
 * @author Martin Auswöger <martin@madeyourday.net>
 */

$GLOBALS['TL_DCA']['tl_content']['config']['onload_callback'][] = array('MadeYourDay\RockSolidCustomElements\CustomElements', 'onloadCallback');
$GLOBALS['TL_DCA']['tl_content']['config']['onsubmit_callback'][] = array('MadeYourDay\RockSolidCustomElements\CustomElements', 'onsubmitCallback');
$GLOBALS['TL_DCA']['tl_content']['fields']['rsce_data'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_content']['rsce_data'],
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
 * RockSolid Slide Content DCA
 *
 * @author Martin Auswöger <martin@madeyourday.net>
 */

if (TL_MODE === 'BE') {

	// Dynamically add the parent table
	if (Input::get('do') == 'rocksolid_slider') {
		$GLOBALS['TL_DCA']['tl_content']['config']['ptable'] = 'tl_rocksolid_slide';
		$GLOBALS['TL_DCA']['tl_content']['list']['sorting']['header_callback'] = array('MadeYourDay\\RockSolidSlider\\Slider', 'headerCallbackContent');
	}

	// Load module language file
	$this->loadLanguageFile('tl_module');

}

$GLOBALS['TL_DCA']['tl_content']['config']['onload_callback'][] = array('MadeYourDay\\RockSolidSlider\\Slider', 'contentOnloadCallback');

$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] = 'rsts_import_settings';
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] = 'rsts_content_type';
$GLOBALS['TL_DCA']['tl_content']['palettes']['rocksolid_slider'] = '{type_legend},type,headline,rsts_content_type';
$GLOBALS['TL_DCA']['tl_content']['palettes']['rocksolid_sliderrsts_default'] = '{type_legend},type,headline,rsts_content_type;{rocksolid_slider_legend},rsts_id,rsts_import_settings,rsts_type,rsts_direction,rsts_random,rsts_loop,rsts_centerContent,rsts_skin,rsts_width,rsts_height,rsts_preloadSlides,rsts_gapSize,rsts_duration,rsts_captions,rsts_scaleMode,rsts_imagePosition;{rsts_navigation_legend},rsts_navType,rsts_deepLinkPrefix,rsts_controls,rsts_thumbControls,rsts_keyboard,rsts_invertControls;{rsts_thumbs_legend},rsts_thumbs_imgSize,rsts_thumbs;{rsts_autoplay_legend},rsts_autoplay,rsts_autoplayRestart,rsts_autoplayProgress,rsts_pauseAutoplayOnHover,rsts_videoAutoplay;{rsts_carousel_legend},rsts_slideMaxCount,rsts_slideMinSize,rsts_slideMaxSize,rsts_rowMaxCount,rsts_rowMinSize,rsts_rowSlideRatio,rsts_prevNextSteps,rsts_combineNavItems,rsts_visibleArea,rsts_visibleAreaMax,rsts_visibleAreaAlign;{template_legend:hide},rsts_template,size,fullsize;{protected_legend:hide},protected;{expert_legend:hide},guests,rsts_customSkin,rsts_cssPrefix,cssID;{invisible_legend:hide},invisible,start,stop';
$GLOBALS['TL_DCA']['tl_content']['palettes']['rocksolid_sliderrsts_images'] = '{type_legend},type,headline,rsts_content_type;{source_legend:hide},multiSRC;{rocksolid_slider_legend},rsts_import_settings,rsts_type,rsts_direction,rsts_random,rsts_loop,rsts_centerContent,rsts_skin,rsts_width,rsts_height,rsts_preloadSlides,rsts_gapSize,rsts_duration,rsts_captions,rsts_scaleMode,rsts_imagePosition;{rsts_navigation_legend},rsts_navType,rsts_deepLinkPrefix,rsts_controls,rsts_thumbControls,rsts_keyboard,rsts_invertControls;{rsts_thumbs_legend},rsts_thumbs_imgSize,rsts_thumbs;{rsts_autoplay_legend},rsts_autoplay,rsts_autoplayRestart,rsts_autoplayProgress,rsts_pauseAutoplayOnHover,rsts_videoAutoplay;{rsts_carousel_legend},rsts_slideMaxCount,rsts_slideMinSize,rsts_slideMaxSize,rsts_rowMaxCount,rsts_rowMinSize,rsts_rowSlideRatio,rsts_prevNextSteps,rsts_combineNavItems,rsts_visibleArea,rsts_visibleAreaMax,rsts_visibleAreaAlign;{template_legend:hide},rsts_template,size,fullsize;{protected_legend:hide},protected;{expert_legend:hide},guests,rsts_customSkin,rsts_cssPrefix,cssID;{invisible_legend:hide},invisible,start,stop';
$GLOBALS['TL_DCA']['tl_content']['palettes']['rocksolid_sliderrsts_import_settingsrsts_default'] = '{type_legend},type,headline,rsts_content_type;{rocksolid_slider_legend},rsts_id,rsts_import_settings,rsts_import_settings_from;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop';
$GLOBALS['TL_DCA']['tl_content']['palettes']['rocksolid_sliderrsts_import_settingsrsts_images'] = '{type_legend},type,headline,rsts_content_type;{source_legend:hide},multiSRC;{rocksolid_slider_legend},rsts_import_settings,rsts_import_settings_from;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop';

$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] = 'rsts_thumbs';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['rsts_thumbs'] = 'rsts_thumbs_width,rsts_thumbs_height,rsts_thumbs_gapSize,rsts_thumbs_duration,rsts_thumbs_scaleMode,rsts_thumbs_imagePosition,rsts_thumbs_controls,rsts_thumbs_slideMaxCount,rsts_thumbs_slideMinSize,rsts_thumbs_slideMaxSize,rsts_thumbs_rowMaxCount,rsts_thumbs_rowMinSize,rsts_thumbs_rowSlideRatio,rsts_thumbs_prevNextSteps,rsts_thumbs_visibleArea,rsts_thumbs_visibleAreaMax';

$GLOBALS['TL_DCA']['tl_content']['fields']['rsts_content_type'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_content_type'],
	'default' => 'rsts_default',
	'exclude' => true,
	'inputType' => 'select',
	'options' => array('rsts_default', 'rsts_images'),
	'reference' => &$GLOBALS['TL_LANG']['tl_module']['rsts_content_types'],
	'eval' => array(
		'mandatory' => true,
		'submitOnChange' => true,
		'tl_class' => 'w50',
	),
	'sql' => "varchar(64) NOT NULL default 'rsts_default'",
);
$GLOBALS['TL_DCA']['tl_content']['fields']['rsts_id'] = array(
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
$GLOBALS['TL_DCA']['tl_content']['fields']['rsts_import_settings'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_import_settings'],
	'exclude' => true,
	'inputType' => 'checkbox',
	'eval' => array(
		'submitOnChange' => true,
		'tl_class' => 'w50 m12',
	),
	'sql' => "char(1) NOT NULL default ''",
);
$GLOBALS['TL_DCA']['tl_content']['fields']['rsts_import_settings_from'] = array(
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
$GLOBALS['TL_DCA']['tl_content']['fields']['rsts_template'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_template'],
	'default' => 'rsts_default',
	'exclude' => true,
	'inputType' => 'select',
	'options_callback' => array('MadeYourDay\\RockSolidSlider\\Slider', 'getSliderTemplates'),
	'eval' => array('tl_class' => 'w50'),
	'sql' => "varchar(32) NOT NULL default 'rsts_default'",
);
// slider type (slide, side-slide, fade or fade-in-out)
$GLOBALS['TL_DCA']['tl_content']['fields']['rsts_type'] = array(
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
$GLOBALS['TL_DCA']['tl_content']['fields']['rsts_direction'] = array(
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
$GLOBALS['TL_DCA']['tl_content']['fields']['rsts_random'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_random'],
	'exclude' => true,
	'inputType' => 'checkbox',
	'eval' => array('tl_class' => 'w50'),
	'sql' => "char(1) NOT NULL default ''",
);
// if true the slider loops infinitely
$GLOBALS['TL_DCA']['tl_content']['fields']['rsts_loop'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_loop'],
	'exclude' => true,
	'inputType' => 'checkbox',
	'eval' => array('tl_class' => 'w50'),
	'sql' => "char(1) NOT NULL default ''",
);
// true, "x" or "y" to center the the slides content
// use the attribute data-rsts-center to set the mode per slide
$GLOBALS['TL_DCA']['tl_content']['fields']['rsts_centerContent'] = array(
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
$GLOBALS['TL_DCA']['tl_content']['fields']['rsts_skin'] = array(
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
$GLOBALS['TL_DCA']['tl_content']['fields']['rsts_width'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_width'],
	'exclude' => true,
	'inputType' => 'text',
	'eval' => array(
		'tl_class' => 'w50',
		'decodeEntities' => true,
	),
	'sql' => "varchar(64) NOT NULL default ''",
);
$GLOBALS['TL_DCA']['tl_content']['fields']['rsts_height'] = array(
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
$GLOBALS['TL_DCA']['tl_content']['fields']['rsts_preloadSlides'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_preloadSlides'],
	'exclude' => true,
	'inputType' => 'select',
	'options' => array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 15, 20, 25, 30, 40, 50, 100),
	'eval' => array('tl_class' => 'w50', 'includeBlankOption' => true),
	'sql' => "int(10) unsigned NOT NULL default '0'",
);
// gap between the slides
$GLOBALS['TL_DCA']['tl_content']['fields']['rsts_gapSize'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_gapSize'],
	'exclude' => true,
	'inputType' => 'text',
	'eval' => array('tl_class' => 'w50'),
	'sql' => "varchar(64) NOT NULL default '0%'",
);
// duration of the slide animation in milliseconds
$GLOBALS['TL_DCA']['tl_content']['fields']['rsts_duration'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_duration'],
	'exclude' => true,
	'inputType' => 'text',
	'eval' => array('tl_class' => 'w50'),
	'sql' => "int(10) unsigned NOT NULL default '0'",
);
// false or the duration between slides in milliseconds
$GLOBALS['TL_DCA']['tl_content']['fields']['rsts_autoplay'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_autoplay'],
	'exclude' => true,
	'inputType' => 'text',
	'eval' => array('tl_class' => 'w50'),
	'sql' => "int(10) unsigned NOT NULL default '0'",
);
// true to autoplay videos
$GLOBALS['TL_DCA']['tl_content']['fields']['rsts_videoAutoplay'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_videoAutoplay'],
	'exclude' => true,
	'inputType' => 'checkbox',
	'eval' => array('tl_class' => 'w50'),
	'sql' => "char(1) NOT NULL default ''",
);
// false or the duration between user interaction and autoplay
// (must be bigger than autoplay)
$GLOBALS['TL_DCA']['tl_content']['fields']['rsts_autoplayRestart'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_autoplayRestart'],
	'exclude' => true,
	'inputType' => 'text',
	'eval' => array('tl_class' => 'w50'),
	'sql' => "int(10) unsigned NOT NULL default '0'",
);
// displays a progress bar
$GLOBALS['TL_DCA']['tl_content']['fields']['rsts_autoplayProgress'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_autoplayProgress'],
	'exclude' => true,
	'inputType' => 'checkbox',
	'eval' => array('tl_class' => 'w50'),
	'sql' => "char(1) NOT NULL default ''",
);
// true to pause the autoplay on hover
$GLOBALS['TL_DCA']['tl_content']['fields']['rsts_pauseAutoplayOnHover'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_pauseAutoplayOnHover'],
	'exclude' => true,
	'inputType' => 'checkbox',
	'eval' => array('tl_class' => 'w50'),
	'sql' => "char(1) NOT NULL default ''",
);
// navigation type (bullets, numbers, tabs)
$GLOBALS['TL_DCA']['tl_content']['fields']['rsts_navType'] = array(
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
$GLOBALS['TL_DCA']['tl_content']['fields']['rsts_controls'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_controls'],
	'exclude' => true,
	'inputType' => 'checkbox',
	'eval' => array('tl_class' => 'w50'),
	'sql' => "char(1) NOT NULL default '1'",
);
// true to show thumbnails inside the prev and next controls
$GLOBALS['TL_DCA']['tl_content']['fields']['rsts_thumbControls'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_thumbControls'],
	'exclude' => true,
	'inputType' => 'checkbox',
	'eval' => array('tl_class' => 'w50'),
	'sql' => "char(1) NOT NULL default ''",
);
// Adds data-rsts-class="rsts-invert-controls" to all slides
$GLOBALS['TL_DCA']['tl_content']['fields']['rsts_invertControls'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_invertControls'],
	'exclude' => true,
	'inputType' => 'checkbox',
	'eval' => array('tl_class' => 'w50'),
	'sql' => "char(1) NOT NULL default ''",
);
// image scale mode (fit, crop, scale)
// only works if width and height are not set to "auto"
$GLOBALS['TL_DCA']['tl_content']['fields']['rsts_scaleMode'] = array(
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
$GLOBALS['TL_DCA']['tl_content']['fields']['rsts_imagePosition'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_imagePosition'],
	'exclude' => true,
	'inputType' => 'select',
	'options' => array('center', 'top', 'right', 'bottom', 'left', 'top-left', 'top-right', 'bottom-left', 'bottom-right'),
	'reference' => &$GLOBALS['TL_LANG']['tl_module']['rsts_imagePositions'],
	'eval' => array('tl_class' => 'w50'),
	'sql' => "varchar(64) NOT NULL default ''",
);
// URL hash prefix or false to disable deep linking, e.g. "slider-"
$GLOBALS['TL_DCA']['tl_content']['fields']['rsts_deepLinkPrefix'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_deepLinkPrefix'],
	'exclude' => true,
	'inputType' => 'text',
	'eval' => array('tl_class' => 'w50'),
	'sql' => "varchar(255) NOT NULL default ''",
);
// true to enable keyboard arrow navigation
$GLOBALS['TL_DCA']['tl_content']['fields']['rsts_keyboard'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_keyboard'],
	'exclude' => true,
	'inputType' => 'checkbox',
	'eval' => array('tl_class' => 'w50'),
	'sql' => "char(1) NOT NULL default '1'",
);
// true to enable keyboard arrow navigation
$GLOBALS['TL_DCA']['tl_content']['fields']['rsts_captions'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_captions'],
	'exclude' => true,
	'inputType' => 'checkbox',
	'eval' => array('tl_class' => 'w50 m12'),
	'sql' => "char(1) NOT NULL default '1'",
);
$GLOBALS['TL_DCA']['tl_content']['fields']['rsts_thumbs'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_thumbs'],
	'exclude' => true,
	'inputType' => 'checkbox',
	'eval' => array(
		'submitOnChange' => true,
		'tl_class' => 'w50 m12',
	),
	'sql' => "char(1) NOT NULL default ''",
);
$GLOBALS['TL_DCA']['tl_content']['fields']['rsts_thumbs_width'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_width'],
	'exclude' => true,
	'inputType' => 'text',
	'eval' => array(
		'tl_class' => 'clr w50',
		'decodeEntities' => true,
	),
	'sql' => "varchar(64) NOT NULL default '100%'",
);
$GLOBALS['TL_DCA']['tl_content']['fields']['rsts_thumbs_height'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_height'],
	'exclude' => true,
	'inputType' => 'text',
	'eval' => array(
		'tl_class' => 'w50',
		'decodeEntities' => true,
	),
	'sql' => "varchar(64) NOT NULL default '1x1'",
);
$GLOBALS['TL_DCA']['tl_content']['fields']['rsts_thumbs_gapSize'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_gapSize'],
	'exclude' => true,
	'inputType' => 'text',
	'eval' => array('tl_class' => 'w50'),
	'sql' => "varchar(64) NOT NULL default ''",
);
$GLOBALS['TL_DCA']['tl_content']['fields']['rsts_thumbs_duration'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_duration'],
	'exclude' => true,
	'inputType' => 'text',
	'eval' => array('tl_class' => 'w50'),
	'sql' => "int(10) unsigned NOT NULL default '0'",
);
$GLOBALS['TL_DCA']['tl_content']['fields']['rsts_thumbs_scaleMode'] = array(
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
$GLOBALS['TL_DCA']['tl_content']['fields']['rsts_thumbs_imagePosition'] = array(
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
$GLOBALS['TL_DCA']['tl_content']['fields']['rsts_thumbs_controls'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_controls'],
	'exclude' => true,
	'inputType' => 'checkbox',
	'eval' => array('tl_class' => 'w50'),
	'sql' => "char(1) NOT NULL default '1'",
);
$GLOBALS['TL_DCA']['tl_content']['fields']['rsts_thumbs_imgSize'] = array(
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
$GLOBALS['TL_DCA']['tl_content']['fields']['rsts_thumbs_slideMaxCount'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_slideMaxCount'],
	'exclude' => true,
	'inputType' => 'select',
	'options' => array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20),
	'eval' => array('tl_class' => 'w50 clr', 'includeBlankOption' => true),
	'sql' => "int(10) unsigned NOT NULL default '0'",
);
$GLOBALS['TL_DCA']['tl_content']['fields']['rsts_thumbs_prevNextSteps'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_prevNextSteps'],
	'exclude' => true,
	'inputType' => 'select',
	'options' => array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20),
	'eval' => array('tl_class' => 'w50 clr', 'includeBlankOption' => true),
	'sql' => "int(10) unsigned NOT NULL default '0'",
);
$GLOBALS['TL_DCA']['tl_content']['fields']['rsts_thumbs_visibleArea'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_visibleArea'],
	'exclude' => true,
	'inputType' => 'text',
	'eval' => array('tl_class' => 'w50 clr'),
	'sql' => "double NOT NULL default '0'",
);
$GLOBALS['TL_DCA']['tl_content']['fields']['rsts_thumbs_visibleAreaMax'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_visibleAreaMax'],
	'exclude' => true,
	'inputType' => 'text',
	'eval' => array('tl_class' => 'w50'),
	'sql' => "double NOT NULL default '0'",
);
$GLOBALS['TL_DCA']['tl_content']['fields']['rsts_thumbs_slideMinSize'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_slideMinSize'],
	'exclude' => true,
	'inputType' => 'text',
	'eval' => array('tl_class' => 'clr w50'),
	'sql' => "int(10) unsigned NOT NULL default '50'",
);
$GLOBALS['TL_DCA']['tl_content']['fields']['rsts_thumbs_slideMaxSize'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_slideMaxSize'],
	'exclude' => true,
	'inputType' => 'text',
	'eval' => array('tl_class' => 'w50'),
	'sql' => "int(10) unsigned NOT NULL default '50'",
);
$GLOBALS['TL_DCA']['tl_content']['fields']['rsts_thumbs_rowMaxCount'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_rowMaxCount'],
	'exclude' => true,
	'inputType' => 'select',
	'options' => array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20),
	'eval' => array('tl_class' => 'clr w50', 'includeBlankOption' => true),
	'sql' => "int(10) unsigned NOT NULL default '0'",
);
$GLOBALS['TL_DCA']['tl_content']['fields']['rsts_thumbs_rowMinSize'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_rowMinSize'],
	'exclude' => true,
	'inputType' => 'text',
	'eval' => array('tl_class' => 'w50'),
	'sql' => "int(10) unsigned NOT NULL default '0'",
);
$GLOBALS['TL_DCA']['tl_content']['fields']['rsts_thumbs_rowSlideRatio'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_rowSlideRatio'],
	'exclude' => true,
	'inputType' => 'text',
	'eval' => array('tl_class' => 'w50'),
	'sql' => "varchar(255) NOT NULL default ''",
);
// maximum number of visible slides
$GLOBALS['TL_DCA']['tl_content']['fields']['rsts_slideMaxCount'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_slideMaxCount'],
	'exclude' => true,
	'inputType' => 'select',
	'options' => array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20),
	'eval' => array('tl_class' => 'w50', 'includeBlankOption' => true),
	'sql' => "int(10) unsigned NOT NULL default '0'",
);
// number of slides to navigate by clicking prev or next
$GLOBALS['TL_DCA']['tl_content']['fields']['rsts_prevNextSteps'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_prevNextSteps'],
	'exclude' => true,
	'inputType' => 'select',
	'options' => array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20),
	'eval' => array('tl_class' => 'w50 clr', 'includeBlankOption' => true),
	'sql' => "int(10) unsigned NOT NULL default '0'",
);
// the size of the area for the visible slide (0 = 0%, 1 = 100%)
$GLOBALS['TL_DCA']['tl_content']['fields']['rsts_visibleArea'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_visibleArea'],
	'exclude' => true,
	'inputType' => 'text',
	'eval' => array('tl_class' => 'w50 clr'),
	'sql' => "double NOT NULL default '0'",
);
// maximum size of the area for the visible slide in px
$GLOBALS['TL_DCA']['tl_content']['fields']['rsts_visibleAreaMax'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_visibleAreaMax'],
	'exclude' => true,
	'inputType' => 'text',
	'eval' => array('tl_class' => 'w50'),
	'sql' => "double NOT NULL default '0'",
);
// Alignment of the visible area (0 = start, 0.5 = center, 1 = end)
$GLOBALS['TL_DCA']['tl_content']['fields']['rsts_visibleAreaAlign'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_visibleAreaAlign'],
	'exclude' => true,
	'inputType' => 'select',
	'options' => array('0', '50', '100'),
	'reference' => &$GLOBALS['TL_LANG']['tl_module']['rsts_visibleAreaAligns'],
	'eval' => array('tl_class' => 'w50'),
	'sql' => "double NOT NULL default '50'",
);
// minimal size of one slide in px
$GLOBALS['TL_DCA']['tl_content']['fields']['rsts_slideMinSize'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_slideMinSize'],
	'exclude' => true,
	'inputType' => 'text',
	'eval' => array('tl_class' => 'clr w50'),
	'sql' => "int(10) unsigned NOT NULL default '0'",
);
// maximum size of one slide in px
$GLOBALS['TL_DCA']['tl_content']['fields']['rsts_slideMaxSize'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_slideMaxSize'],
	'exclude' => true,
	'inputType' => 'text',
	'eval' => array('tl_class' => 'w50'),
	'sql' => "int(10) unsigned NOT NULL default '0'",
);
// maximum number of visible rows
$GLOBALS['TL_DCA']['tl_content']['fields']['rsts_rowMaxCount'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_rowMaxCount'],
	'exclude' => true,
	'inputType' => 'select',
	'options' => array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20),
	'eval' => array('tl_class' => 'clr w50', 'includeBlankOption' => true),
	'sql' => "int(10) unsigned NOT NULL default '0'",
);
// minimal size of one row in px
$GLOBALS['TL_DCA']['tl_content']['fields']['rsts_rowMinSize'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_rowMinSize'],
	'exclude' => true,
	'inputType' => 'text',
	'eval' => array('tl_class' => 'w50'),
	'sql' => "int(10) unsigned NOT NULL default '0'",
);
// row slide count ratio, e.g. 2x1 or 0.5
$GLOBALS['TL_DCA']['tl_content']['fields']['rsts_rowSlideRatio'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_rowSlideRatio'],
	'exclude' => true,
	'inputType' => 'text',
	'eval' => array('tl_class' => 'w50'),
	'sql' => "varchar(255) NOT NULL default ''",
);
// combine navigation items if multiple slides are visible (default true)
$GLOBALS['TL_DCA']['tl_content']['fields']['rsts_combineNavItems'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_combineNavItems'],
	'exclude' => true,
	'inputType' => 'checkbox',
	'eval' => array('tl_class' => 'w50 m12'),
	'sql' => "char(1) NOT NULL default '1'",
);
// custom slider skin (rsts_skin gets ignored if this is set)
$GLOBALS['TL_DCA']['tl_content']['fields']['rsts_customSkin'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_customSkin'],
	'exclude' => true,
	'inputType' => 'text',
	'eval' => array('tl_class' => 'w50 clr'),
	'sql' => "varchar(64) NOT NULL default ''",
);
// prefix for all RockSolid Slider specific css class names
$GLOBALS['TL_DCA']['tl_content']['fields']['rsts_cssPrefix'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_module']['rsts_cssPrefix'],
	'exclude' => true,
	'inputType' => 'text',
	'eval' => array('tl_class' => 'w50'),
	'sql' => "varchar(64) NOT NULL default ''",
);
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

// define default bootstrap palette
$GLOBALS['TL_DCA']['tl_content']['metapalettes']['_bootstrap_default_'] = array
(
    'type'      => array('type', 'headline'),
    'link'      => array(),
    'config'    => array(),
    'protected' => array(':hide', 'protected'),
    'expert'    => array(':hide', 'guests', 'cssID', 'space'),
    'invisible' => array(':hide', 'invisible', 'start', 'stop'),
);

// bootstrap empty palettes
$GLOBALS['TL_DCA']['tl_content']['metapalettes']['_bootstrap_empty_'] = array
(
    'type' => array('type'),
);

// Bootstrap parent palette.
$GLOBALS['TL_DCA']['tl_content']['metapalettes']['bootstrap_parent extends _bootstrap_empty_'] = array
(
    '+type' => array('bootstrap_parentId'),
);

$GLOBALS['TL_DCA']['tl_content']['fields']['bootstrap_dataAttributes'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['bootstrap_dataAttributes'],
    'exclude'   => true,
    'inputType' => 'multiColumnWizard',
    'eval'      => array(
        'tl_class'     => 'clr',
        'columnFields' => array
        (
            'name'  => array
            (
                'label'     => &$GLOBALS['TL_LANG']['tl_content']['bootstrap_dataAttributes_name'],
                'exclude'   => true,
                'inputType' => 'select',
                'options_callback' => ['contao_bootstrap.core.listener.content_dca', 'getDataAttributes'],
                'reference' => &$GLOBALS['TL_LANG']['tl_content']['bootstrap_buttons_types'],
                'eval'      => array('style' => 'width: 145px;', 'includeBlankOption' => true, 'chosen' => true),
            ),
            'value' => array
            (
                'label'     => &$GLOBALS['TL_LANG']['tl_content']['bootstrap_dataAttributes_value'],
                'exclude'   => true,
                'inputType' => 'text',
                'eval'      => array('style' => 'width: 160px', 'allowHtml' => true),
            ),
        )
    ),
    'sql'       => "blob NULL"
);
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

/*
 * Config
 */

$GLOBALS['TL_DCA']['tl_content']['config']['onload_callback'][] = [
    'contao_bootstrap.grid.listeners.dca.content',
    'initializeDca',
];

/*
 * Palettes
 */

$GLOBALS['TL_DCA']['tl_content']['metapalettes']['bs_gridStart'] = [
    'type'           => [
        'type',
        'bs_grid',
        'bs_grid_name',
    ],
    'bs_grid_wizard' => ['bs_grid_wizard'],
    'template'       => [':hide', 'customTpl'],
    'protected'      => [':hide', 'protected'],
    'expert'         => [':hide', 'guests', 'cssID'],
    'invisible'      => ['invisible', 'start', 'stop'],
];

$GLOBALS['TL_DCA']['tl_content']['metapalettes']['bs_gridSeparator'] = [
    'type'      => ['type', 'name', 'bs_grid_parent'],
    'template'  => [':hide', 'customTpl'],
    'protected' => [':hide', 'protected'],
    'expert'    => [':hide', 'guests', 'cssID'],
    'invisible' => ['invisible', 'start', 'stop'],
];

$GLOBALS['TL_DCA']['tl_content']['metapalettes']['bs_gridStop'] = [
    'type'      => ['type', 'name', 'bs_grid_parent'],
    'template'  => [':hide', 'customTpl'],
    'protected' => [':hide', 'protected'],
    'expert'    => [':hide', 'guests'],
    'invisible' => ['invisible', 'start', 'stop'],
];

$GLOBALS['TL_DCA']['tl_content']['metapalettes']['bs_grid_gallery'] = [
    'type'      => ['type', 'headline'],
    'source'    => ['multiSRC', 'sortBy', 'metaIgnore'],
    'image'     => ['bs_grid', 'fullsize', 'bs_image_sizes', 'perPage', 'numberOfItems'],
    'template'  => [':hide', 'galleryTpl', 'customTpl'],
    'protected' => [':hide', 'protected'],
    'expert'    => [':hide', 'guests', 'cssID', 'useHomeDir'],
    'invisible' => ['invisible', 'start', 'stop'],
];

/*
 * Fields
 */

$GLOBALS['TL_DCA']['tl_content']['fields']['bs_grid'] = [
    'label'            => &$GLOBALS['TL_LANG']['tl_content']['bs_grid'],
    'exclude'          => true,
    'inputType'        => 'select',
    'options_callback' => ['contao_bootstrap.grid.listeners.dca.content', 'getGridOptions'],
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

$GLOBALS['TL_DCA']['tl_content']['fields']['bs_grid_name'] = [
    'label'         => &$GLOBALS['TL_LANG']['tl_content']['bs_grid_name'],
    'exclude'       => true,
    'inputType'     => 'text',
    'reference'     => &$GLOBALS['TL_LANG']['tl_content'],
    'eval'          => [
        'includeBlankOption' => true,
        'chosen'             => true,
        'tl_class'           => 'w50',
    ],
    'save_callback' => [
        ['contao_bootstrap.grid.listeners.dca.content', 'generateGridName'],
    ],
    'sql'           => "varchar(64) NOT NULL default ''",
];

$GLOBALS['TL_DCA']['tl_content']['fields']['bs_grid_parent'] = [
    'label'            => &$GLOBALS['TL_LANG']['tl_content']['bs_grid_parent'],
    'exclude'          => true,
    'inputType'        => 'select',
    'options_callback' => ['contao_bootstrap.grid.listeners.dca.content', 'getGridParentOptions'],
    'reference'        => &$GLOBALS['TL_LANG']['tl_content'],
    'eval'             => [
        'mandatory'          => true,
        'includeBlankOption' => true,
        'chosen'             => true,
        'doNotCopy'          => true,
        'tl_class'           => 'w50',
    ],
    'sql'              => "int(10) unsigned NOT NULL default '0'",
];

$GLOBALS['TL_DCA']['tl_content']['fields']['bs_grid_wizard'] = [
    'label'            => &$GLOBALS['TL_LANG']['tl_content']['bs_grid_wizard'],
    'exclude'          => true,
    'inputType'        => 'select',
    'options_callback' => ['contao_bootstrap.grid.listeners.dca.content', 'getGridColumns'],
    'save_callback'    => [
        ['contao_bootstrap.grid.listeners.dca.content', 'generateColumns'],
    ],
    'eval'             => [
        'includeBlankOption' => true,
        'chosen'             => true,
        'tl_class'           => 'clr w50',
        'doNotSaveEmpty'     => true,
    ],
];

$GLOBALS['TL_DCA']['tl_content']['fields']['bs_image_sizes'] = [
    'label'         => &$GLOBALS['TL_LANG']['tl_content']['bs_image_sizes'],
    'exclude'       => true,
    'inputType'     => 'multiColumnWizard',
    'eval'          => [
        'tl_class'     => 'clr lng bs-image-sizes',
        'columnFields' => [
            'size' => [
                'label'            => &$GLOBALS['TL_LANG']['tl_content']['size'],
                'exclude'          => true,
                'inputType'        => 'select',
                'reference'        => &$GLOBALS['TL_LANG']['MSC'],
                'eval'             => [
                    'includeBlankOption' => true,
                    'nospace'            => true,
                    'helpwizard'         => true,
                ],
                'options_callback' => ['contao_bootstrap.grid.listeners.dca.content', 'getImageSizes'],
            ],
            'width' => [
                'label'         => &$GLOBALS['TL_LANG']['tl_content']['bs_image_size_width'],
                'exclude'       => true,
                'inputType'     => 'text',
                'reference'     => &$GLOBALS['TL_LANG']['tl_content'],
                'eval'          => [
                    'includeBlankOption' => true,
                    'chosen'             => true,
                    'class'           => 'tl_imageSize_0',
                ],
            ],
            'height' => [
                'label'         => &$GLOBALS['TL_LANG']['tl_content']['bs_image_size_height'],
                'exclude'       => true,
                'inputType'     => 'text',
                'reference'     => &$GLOBALS['TL_LANG']['tl_content'],
                'eval'          => [
                    'includeBlankOption' => true,
                    'chosen'             => true,
                    'class'           => 'tl_imageSize_1',
                ],
            ]
        ],
    ],
    'sql'           => 'blob NULL',
];

$GLOBALS['TL_DCA']['tl_content']['fields']['multiSRC']['load_callback'][] = [
    'contao_bootstrap.grid.listeners.dca.content',
    'setMultiSrcFlags'
];
}

namespace  {
/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2015 Contao Stammtisch Dresden
 * @package advanced-classes
 * @author Mathias Arzberger <develop@pdir.de>
 * @license http://www.gnu.org/licences/lgpl-3.0.html LGPL
 */

$dc = &$GLOBALS['TL_DCA']['tl_content'];

foreach ($dc['palettes'] as $key=>$value) {
    if(!is_array ($value)) {
        if(strpos($value,"cssID;")!==false) {
            $dc['palettes'][$key] = str_replace('cssID;', 'cssID;{advanced_classes_legend},advancedCss;', $value);
        } else if(strpos($value,"useHomeDir;")!==false) {
            $dc['palettes'][$key] = str_replace('useHomeDir;', 'useHomeDir;{advanced_classes_legend},advancedCss;', $value);
        }

    }
}

$arrFields = array
(
    'advancedCss' => array
    (
        'label'                   => &$GLOBALS['TL_LANG']['tl_content']['advancedCss'],
        'exclude'                 => true,
        'search'                  => false,
        'inputType'               => 'text',
        'eval'                    => array('maxlength'=>255),
        'sql'                     => "varchar(255) NOT NULL default ''"
    ),
);

$dc['fields'] = array_merge($dc['fields'], $arrFields);
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

$GLOBALS['TL_DCA']['tl_content']['palettes']['mateTeaserBox'] = '{type_legend},type,headline;{text_legend},text,mateTeaserbox_subHeadline;{image_legend},addImage;{mateTeaserBoxSettings},mateTeaserBox_page,mateTeaserBox_pageText;{template_legend:hide},mateTeaserBox_customTpl;{expert_legend:hide},cssID,space';

$GLOBALS['TL_DCA']['tl_content']['palettes']['mateContentBox'] = '{type_legend},type,headline;{text_legend},text;{image_legend},addImage;{mateContentBoxSettings},mateContentBox_page,mateContentBox_pageText;{template_legend:hide},mateContentBox_customTpl;{expert_legend:hide},cssID,space';

$GLOBALS['TL_DCA']['tl_content']['palettes']['mateParallaxElement'] = '{type_legend},type,headline;{mateParallaxElementSettings},mateParallaxElement_text,mateParallaxElement_height,mateTeaserBox_page,mateTeaserBox_pageText;{image_legend},addImage;{template_legend:hide},mateParallaxElement_customTpl;{expert_legend:hide},cssID,space';

$GLOBALS['TL_DCA']['tl_content']['palettes']['mateTextBackgroundElement'] = '{type_legend},type,headline;{text_legend},text;{image_legend},addImage;{mateTextBackground_settings},mate_background_image;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop';

/**
 * Add fields to tl_content
 */
$GLOBALS['TL_DCA']['tl_content']['fields']['mateTeaserBox_page'] = array
(
    'label' => & $GLOBALS['TL_LANG']['tl_content']['mateTeaserBox_page'],
    'exclude' => true,
    'inputType' => 'pageTree',
    'eval' => array (
        'fieldType' => 'radio',
        'tl_class'=>'w50 autoheight'
    ),
    'reference' => &$GLOBALS['TL_LANG']['tl_content']['mateTeaserBox_page'],
    'sql' => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['mateTeaserBox_pageText'] = array
(
    'label' => &$GLOBALS['TL_LANG']['tl_content']['mateTeaserBox_pageText'],
    'exclude' => true,
    'inputType' => 'text',
    'eval' => array('tl_class'=>'w50'),
    'reference' => &$GLOBALS['TL_LANG']['tl_content']['mateTeaserBox_pageText'],
    'sql' => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['mateContentBox_page'] = array
(
    'label' => & $GLOBALS['TL_LANG']['tl_content']['mateContentBox_page'],
    'exclude' => true,
    'inputType' => 'pageTree',
    'eval' => array (
        'fieldType' => 'radio',
        'tl_class'=>'w50'
    ),
    'reference' => &$GLOBALS['TL_LANG']['tl_content']['mateContentBox_page'],
    'sql' => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['mateContentBox_pageText'] = array
(
    'label' => &$GLOBALS['TL_LANG']['tl_content']['mateContentBox_pageText'],
    'exclude' => true,
    'inputType' => 'text',
    'eval' => array('tl_class'=>'w50'),
    'reference' => &$GLOBALS['TL_LANG']['tl_content']['mateContentBox_pageText'],
    'sql' => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['mateContentBox_customTpl'] = array
(
    'label' => &$GLOBALS['TL_LANG']['tl_content']['mateContentBox_customTpl'],
    'exclude' => true,
    'inputType' => 'select',
    'options_callback' => array('tl_content_mate', 'getContentBoxTemplates'),
    'eval' => array('includeBlankOption'=>true, 'chosen'=>true, 'tl_class'=>'w50'),
    'sql' => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['mateTeaserBox_customTpl'] = array
(
    'label' => &$GLOBALS['TL_LANG']['tl_content']['mateTeaserBox_customTpl'],
    'exclude' => true,
    'inputType' => 'select',
    'options_callback' => array('tl_content_mate', 'getTeaserBoxTemplates'),
    'eval' => array('includeBlankOption'=>true, 'chosen'=>true, 'tl_class'=>'w50'),
    'sql' => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['mateTeaserbox_subHeadline'] = array
(
    'label' => &$GLOBALS['TL_LANG']['tl_content']['mateTeaserbox_subHeadline'],
    'exclude' => true,
    'inputType' => 'text',
    'eval' => array('tl_class'=>'w50 clr'),
    'sql' => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['mateParallaxElement_customTpl'] = array
(
    'label' => &$GLOBALS['TL_LANG']['tl_content']['mateParallaxElement_customTpl'],
    'exclude' => true,
    'inputType' => 'select',
    'options_callback' => array('tl_content_mate', 'getParallaxElementTemplates'),
    'eval' => array('includeBlankOption'=>true, 'chosen'=>true, 'tl_class'=>'w50'),
    'sql' => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['mateParallaxElement_text'] = array
(
    'label' => &$GLOBALS['TL_LANG']['tl_content']['mateParallaxElement_text'],
    'exclude' => true,
    'search' => true,
    'inputType' => 'textarea',
    'eval' => array('tl_class'=>'clr', 'rte'=>'tinyMCE'),
    'sql' => "TEXT NULL"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['mateParallaxElement_height'] = array
(
    'label' => &$GLOBALS['TL_LANG']['tl_content']['mateParallaxElement_height'],
    'exclude' => true,
    'inputType' => 'text',
    'eval' => array('tl_class'=>'w50 clr'),
    'sql' => "varchar(5) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['mate_background_image'] = array
(
    'label' => &$GLOBALS['TL_LANG']['tl_content']['mate_background_image'],
    'exclude' => true,
    'inputType' => 'fileTree',
    'eval' => array( 'filesOnly'=>true, 'fieldType'=>'radio', 'feEditable'=>true, 'feViewable'=>true, 'feGroup'=>'personal', 'tl_class'=>'w50 autoheight' ),
    'load_callback' => array
    (
        array('tl_content_mate', 'setSingleSrcFlags')
    ),
    'sql' => "binary(16) NULL"
);

class tl_content_mate extends Backend {
    /**
     * Return all content element templates as array
     *
     * @param DataContainer $dc
     *
     * @return array
     */
    public function getContentBoxTemplates(DataContainer $dc)
    {
        return $this->getTemplateGroup('ce_mate_contentbox');
    }

    public function getTeaserBoxTemplates(DataContainer $dc)
    {
        return $this->getTemplateGroup('ce_mate_teaserbox');
    }

    public function getParallaxElementTemplates(DataContainer $dc)
    {
        return $this->getTemplateGroup('ce_mate_parallax');
    }

    /**
     * Dynamically add flags to the "singleSRC" field
     *
     * @param mixed         $varValue
     * @param DataContainer $dc
     *
     * @return mixed
     */
    public function setSingleSrcFlags($varValue, DataContainer $dc)
    {
        if ($dc->activeRecord)
        {
            switch ($dc->activeRecord->type)
            {
                case 'text':
                case 'hyperlink':
                case 'image':
                case 'accordionSingle':
                    $GLOBALS['TL_DCA'][$dc->table]['fields'][$dc->field]['eval']['extensions'] = Config::get('validImageTypes');
                    break;
                case 'download':
                    $GLOBALS['TL_DCA'][$dc->table]['fields'][$dc->field]['eval']['extensions'] = Config::get('allowedDownload');
                    break;
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

// Dynamically add the permission check and parent table
if (Input::get('do') == 'calendar')
{
	$GLOBALS['TL_DCA']['tl_content']['config']['ptable'] = 'tl_calendar_events';
	$GLOBALS['TL_DCA']['tl_content']['config']['onload_callback'][] = array('tl_content_calendar', 'checkPermission');
	$GLOBALS['TL_DCA']['tl_content']['config']['onload_callback'][] = array('tl_content_calendar', 'generateFeed');
	$GLOBALS['TL_DCA']['tl_content']['list']['operations']['toggle']['button_callback'] = array('tl_content_calendar', 'toggleIcon');
}

/**
 * Provide miscellaneous methods that are used by the data configuration array.
 *
 * @property Contao\Calendar $Calendar
 *
 * @author Leo Feyer <https://github.com/leofeyer>
 */
class tl_content_calendar extends Backend
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
	 * Check permissions to edit table tl_content
	 */
	public function checkPermission()
	{
		if ($this->User->isAdmin)
		{
			return;
		}

		// Set the root IDs
		if (empty($this->User->calendars) || !is_array($this->User->calendars))
		{
			$root = array(0);
		}
		else
		{
			$root = $this->User->calendars;
		}

		// Check the current action
		switch (Input::get('act'))
		{
			case '': // empty
			case 'paste':
			case 'create':
			case 'select':
				// Check access to the news item
				$this->checkAccessToElement(CURRENT_ID, $root, true);
				break;

			case 'editAll':
			case 'deleteAll':
			case 'overrideAll':
			case 'cutAll':
			case 'copyAll':
				// Check access to the parent element if a content element is moved
				if (Input::get('act') == 'cutAll' || Input::get('act') == 'copyAll')
				{
					$this->checkAccessToElement(Input::get('pid'), $root, (Input::get('mode') == 2));
				}

				$objCes = $this->Database->prepare("SELECT id FROM tl_content WHERE ptable='tl_calendar_events' AND pid=?")
										 ->execute(CURRENT_ID);

				/** @var Symfony\Component\HttpFoundation\Session\SessionInterface $objSession */
				$objSession = System::getContainer()->get('session');

				$session = $objSession->all();
				$session['CURRENT']['IDS'] = array_intersect((array) $session['CURRENT']['IDS'], $objCes->fetchEach('id'));
				$objSession->replace($session);
				break;

			case 'cut':
			case 'copy':
				// Check access to the parent element if a content element is moved
				$this->checkAccessToElement(Input::get('pid'), $root, (Input::get('mode') == 2));
				// no break

			default:
				// Check access to the content element
				$this->checkAccessToElement(Input::get('id'), $root);
				break;
		}
	}

	/**
	 * Check access to a particular content element
	 *
	 * @param integer $id
	 * @param array   $root
	 * @param boolean $blnIsPid
	 *
	 * @throws Contao\CoreBundle\Exception\AccessDeniedException
	 */
	protected function checkAccessToElement($id, $root, $blnIsPid=false)
	{
		if ($blnIsPid)
		{
			$objCalendar = $this->Database->prepare("SELECT a.id, n.id AS nid FROM tl_calendar_events n, tl_calendar a WHERE n.id=? AND n.pid=a.id")
										  ->limit(1)
										  ->execute($id);
		}
		else
		{
			$objCalendar = $this->Database->prepare("SELECT a.id, n.id AS nid FROM tl_content c, tl_calendar_events n, tl_calendar a WHERE c.id=? AND c.pid=n.id AND n.pid=a.id")
										  ->limit(1)
										  ->execute($id);
		}

		// Invalid ID
		if ($objCalendar->numRows < 1)
		{
			throw new Contao\CoreBundle\Exception\AccessDeniedException('Invalid event content element ID ' . $id . '.');
		}

		// The calendar is not mounted
		if (!in_array($objCalendar->id, $root))
		{
			throw new Contao\CoreBundle\Exception\AccessDeniedException('Not enough permissions to modify article ID ' . $objCalendar->nid . ' in calendar ID ' . $objCalendar->id . '.');
		}
	}

	/**
	 * Check for modified calendar feeds and update the XML files if necessary
	 */
	public function generateFeed()
	{
		/** @var Symfony\Component\HttpFoundation\Session\SessionInterface $objSession */
		$objSession = System::getContainer()->get('session');

		$session = $objSession->get('calendar_feed_updater');

		if (empty($session) || !is_array($session))
		{
			return;
		}

		$this->import('Calendar');

		foreach ($session as $id)
		{
			$this->Calendar->generateFeedsByCalendar($id);
		}

		$this->import('Automator');
		$this->Automator->generateSitemap();

		$objSession->set('calendar_feed_updater', null);
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
		if (!$this->User->hasAccess('tl_content::invisible', 'alexf'))
		{
			return '';
		}

		$href .= '&amp;id=' . Input::get('id') . '&amp;tid=' . $row['id'] . '&amp;state=' . $row['invisible'];

		if ($row['invisible'])
		{
			$icon = 'invisible.svg';
		}

		return '<a href="' . $this->addToUrl($href) . '" title="' . StringUtil::specialchars($title) . '"' . $attributes . '>' . Image::getHtml($icon, $label, 'data-state="' . ($row['invisible'] ? 0 : 1) . '"') . '</a> ';
	}

	/**
	 * Toggle the visibility of an element
	 *
	 * @param integer       $intId
	 * @param boolean       $blnVisible
	 * @param DataContainer $dc
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
		if (is_array($GLOBALS['TL_DCA']['tl_content']['config']['onload_callback']))
		{
			foreach ($GLOBALS['TL_DCA']['tl_content']['config']['onload_callback'] as $callback)
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
		if (!$this->User->hasAccess('tl_content::invisible', 'alexf'))
		{
			throw new Contao\CoreBundle\Exception\AccessDeniedException('Not enough permissions to publish/unpublish content element ID ' . $intId . '.');
		}

		// Set the current record
		if ($dc)
		{
			$objRow = $this->Database->prepare("SELECT * FROM tl_content WHERE id=?")
									 ->limit(1)
									 ->execute($intId);

			if ($objRow->numRows)
			{
				$dc->activeRecord = $objRow;
			}
		}

		$objVersions = new Versions('tl_content', $intId);
		$objVersions->initialize();

		// Reverse the logic (elements have invisible=1)
		$blnVisible = !$blnVisible;

		// Trigger the save_callback
		if (is_array($GLOBALS['TL_DCA']['tl_content']['fields']['invisible']['save_callback']))
		{
			foreach ($GLOBALS['TL_DCA']['tl_content']['fields']['invisible']['save_callback'] as $callback)
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
		$this->Database->prepare("UPDATE tl_content SET tstamp=$time, invisible='" . ($blnVisible ? '1' : '') . "' WHERE id=?")
					   ->execute($intId);

		if ($dc)
		{
			$dc->activeRecord->tstamp = $time;
			$dc->activeRecord->invisible = ($blnVisible ? '1' : '');
		}

		// Trigger the onsubmit_callback
		if (is_array($GLOBALS['TL_DCA']['tl_content']['config']['onsubmit_callback']))
		{
			foreach ($GLOBALS['TL_DCA']['tl_content']['config']['onsubmit_callback'] as $callback)
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

// Add palette to tl_content
$GLOBALS['TL_DCA']['tl_content']['palettes']['comments'] = '{type_legend},type,headline;{comment_legend},com_order,com_perPage,com_moderate,com_bbcode,com_requireLogin,com_disableCaptcha;{template_legend:hide},com_template,customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop';

// Add fields to tl_content
$GLOBALS['TL_DCA']['tl_content']['fields']['com_order'] = array
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

$GLOBALS['TL_DCA']['tl_content']['fields']['com_perPage'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['com_perPage'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('rgxp'=>'natural', 'tl_class'=>'w50'),
	'sql'                     => "smallint(5) unsigned NOT NULL default '0'"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['com_moderate'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['com_moderate'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['com_bbcode'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['com_bbcode'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['com_disableCaptcha'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['com_disableCaptcha'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['com_requireLogin'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['com_requireLogin'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['com_template'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['com_template'],
	'default'                 => 'com_default',
	'exclude'                 => true,
	'inputType'               => 'select',
	'options_callback'        => array('tl_content_comments', 'getCommentsTemplates'),
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "varchar(64) NOT NULL default ''"
);

/**
 * Provide miscellaneous methods that are used by the data configuration array.
 *
 * @author Leo Feyer <https://github.com/leofeyer>
 */
class tl_content_comments extends Backend
{
	/**
	 * Return all comments templates as array
	 *
	 * @return array
	 */
	public function getCommentsTemplates()
	{
		return $this->getTemplateGroup('com_');
	}
}
}

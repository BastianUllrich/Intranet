<?php

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
 * Table exam
 */
$GLOBALS['TL_DCA']['tl_exam'] = array
(

	// Config
	'config' => array
	(
	'dataContainer'               => 'Table',
	//'ctable'                      => array('tl_exam_perform'),
	
		'sql' => array
		(
			'keys' => array
			(
				'id' => 'primary'
			)
		)
	),

		// List
		// List
		'list'     => array
	(
				'sorting'           => array
		(
			'mode'        => 2,
			'fields'      => array('date'),
			'flag'        => 1,
			'panelLayout' => 'filter;sort,search,limit'
		),

		'label'             => array
		(
			'fields' => array('title'),
			'format' => '%s',
		),

		'global_operations' => array
		(
			'all' => array
			(
				'label'      => &$GLOBALS['TL_LANG']['MSC']['all'],
				'href'       => 'act=select',
				'class'      => 'header_edit_all',
				'attributes' => 'onclick="Backend.getScrollOffset()" accesskey="e"'
			)
		),

		'operations'        => array
		(
			'edit'   => array
			(
				'label' => &$GLOBALS['TL_LANG']['tl_screencast']['edit'],
				'href'  => 'act=edit',
				'icon'  => 'edit.gif'
			),
			'delete' => array
			(
				'label'      => &$GLOBALS['TL_LANG']['tl_screencast']['delete'],
				'href'       => 'act=delete',
				'icon'       => 'delete.gif',
				'attributes' => 'onclick="if(!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\'))return false;Backend.getScrollOffset()"'
			),
			'show'   => array
			(
				'label'      => &$GLOBALS['TL_LANG']['tl_screencast']['show'],
				'href'       => 'act=show',
				'icon'       => 'show.gif',
				'attributes' => 'style="margin-right:3px"'
			)
		)
	),

	// palettes 
	'palettes' => array
	(
		'default'       => '{title_legend},title;{date_time_legend},date,duration;{comments_legend},,comments'
	),

	// Fields
	'fields' => array
	(
		'id' => array 
		(
			'sql'                     => "int(10) unsigned NOT NULL auto_increment"
		),
		'tstamp' => array
		(
			'sql'                     => "int(10) unsigned NOT NULL default '0'"
		),
		'title' => array
		(
			'label' => &$GLOBALS['TL_LANG']['tl_exam']['title'],
			'exclude' => true,
			'search' => true,
			'inputType'=> 'text',
		'editable'=>true,
		'eval' => array (
			'mandatory' => true,
			'maxlength' => 255
			),
		'sql' => "varchar(255) NOT NULL default ''"
		),
		'date' => array 
		(
			'label' => &$GLOBALS['TL_LANG']['tl_exam']['date'],
			'exclude' => true,
			'search' => true,
			'inputType' => 'text',
			'eval'    => array(
			'rgxp' => 'date',
				'mandatory'=>true, 
				'maxlength'=>255
			),
			'sql' => "int(10) unsigned NOT NULL default '0'"
		),

		'department' => array
(
  'label'     => &$GLOBALS['TL_LANG']['MSC']['department'],
  'exclude'   => true,
  'inputType' => 'select',
  'options'                 => array('department1','department2','department3','department4','department5','department6','department7','department8','department9','department10','department11','department12','department13','department14'),  
  'reference' => &$GLOBALS['TL_LANG']['MSC'],
'eval'      => array('includeBlankOption'=>true, 'feGroup'=>'study', 'feEditable'=>true, 'feViewable'=>true, 'mandatory'=>true),
  'sql'       => "varchar(10) NOT NULL default ''"
),

		'begin' => array 
		(
			'label'    => &$GLOBALS['TL_LANG']['tl_exam']['begin'],
			'exclude'   => true,
			'search'    => true,
			'inputType'    => 'text',
			'eval'    => array
			(
			'rgxp' => 'time',
				'mandatory'=>true, 
				'maxlength'=>255
			),
		'sql' => "int(10) unsigned NOT NULL default '0'"
		),
		
		'duration' => array 
		(
			'label'    => &$GLOBALS['TL_LANG']['tl_exam']['duration'],
			'exclude'   => true,
			'search'    => true,
			'inputType'    => 'text',
			'eval'    => array(
							'mandatory'=>true, 
				'maxlength'=>3
			),
			'sql' => "int(3) unsigned NOT NULL default '0'"
		),

		'room' => array 
		(
			'label'    => &$GLOBALS['TL_LANG']['tl_exam']['room'],
			'exclude'   => true,
			'search'    => true,
			'inputType'    => 'text',
			'eval'    => array
			(
				'mandatory'=>false, 
				'maxlength'=>255
			),
			'sql' => "varchar(255) NOT NULL default ''"
		),
			
'state' => array
(
  'label'     => &$GLOBALS['TL_LANG']['tl_exam']['state'],
  'exclude'   => true,
  'inputType' => 'select',
  'options'   => array
  (
  'exam not requested',
  'exam requested',
  'exam not received',
  'exam received',
  'exam sent',
  'exam-lecturer-confirmed',
    'diferent'
  ),
  'reference' => &$GLOBALS['TL_LANG']['tl_exam'],
  'eval'      => array('mandatory'=>true, 'multiple'=>true),
  'sql'       => "blob NULL"
),
			
		
'tools' => array
(
  'label'     => &$GLOBALS['TL_LANG']['tl_exam']['tools'],
  'exclude'   => true,
  'inputType' => 'checkbox',
  'options'   => array
  (
  'none',
    'calculator',
    'all-papers',
    'internet',
    'diferent'
  ),
  'reference' => &$GLOBALS['TL_LANG']['tl_exam'],
  'eval'      => array('mandatory'=>true, 'multiple'=>true),
  'sql'       => "blob NULL"
),
	
			'comments' => array (
			'label'    => &$GLOBALS['TL_LANG']['tl_exam']['comments'],
			'exclude'   => true,
			'search'    => true,
			'inputType'    => 'textarea',
			'eval'    => array
			(
				'mandatory'=>false, 
				'maxlength'=>255
			),
			'sql' => "varchar(255) NOT NULL default ''"
		),
				
		),
		
		
	);
}

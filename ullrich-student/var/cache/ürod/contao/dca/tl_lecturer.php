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
 * Table lecturer
 */
$GLOBALS['TL_DCA']['tl_lecturer'] = array
(

	// Config
	'config' => array
	(
			'dataContainer'               => 'Table',
		'ctable'                      => 'tl_exam_perform',
		'enableVersioning'            => true,
		
		'sql' => array
		(
			'keys' => array
			(
				'id' => 'primary'
			)
		)
	),

	// palettes 
	'palettes' => array
	(
		'default'       => '{personal_legend},title,salutation,firstname,lastname;{contact_legend},email,department,mobile;'
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
		'label' => &$GLOBALS['TL_LANG']['tl_lecturer']['title'],
		'exclude' => true,
		'search' => true,
		'inputType'=> 'select',
		  'options'                 => array('-','prof-dr','dr','prof'),  
'reference' => &$GLOBALS['TL_LANG']['tl_lecturer'],
		'editable'=>true,
		'eval' => array (
			'mandatory' => false,
			'maxlength' => 255
			),
		'sql' => "varchar(255) NOT NULL default ''"
		),
		
'salutation' => array
		(
		'label' => &$GLOBALS['TL_LANG']['tl_lecturer']['salutation'],
		'exclude' => true,
		'search' => true,
		'inputType'=> 'select',
		  'options'                 => array('-','mr.','mrs.'),  
'reference' => &$GLOBALS['TL_LANG']['tl_lecturer'],
		'editable'=>true,
		'eval' => array (
			'mandatory' => true,
			'maxlength' => 255
			),
		'sql' => "varchar(255) NOT NULL default ''"
		),
	
'firstname' => array
		(
		'label' => &$GLOBALS['TL_LANG']['tl_lecturer']['firstname'],
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
			
		'lastname' => array
		(
		'label' => &$GLOBALS['TL_LANG']['tl_lecturer']['lastname'],
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
		
'email' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lecturer']['email'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'maxlength'=>255, 'rgxp'=>'email', 'unique'=>true, 'decodeEntities'=>true,  'tl_class'=>'w50'),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),

'department' => array
(
  'label'     => &$GLOBALS['TL_LANG']['tl_lecturer']['department'],
  'exclude'   => true,
  'inputType' => 'select',
  'options'                 => array('department1','department2','department3','department4','department5','department6','department7','department8','department9','department10','department11','department12','department13','department14'),  
  'reference'               => &$GLOBALS['TL_LANG']['lecturer'],
'eval'      => array('includeBlankOption'=>true, 'feGroup'=>'study', 'feEditable'=>true, 'feViewable'=>true, 'mandatory'=>true),
  'sql'       => "varchar(10) NOT NULL default ''"
),
		
'mobile' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_lecturer']['mobile'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>64, 'rgxp'=>'phone', 'decodeEntities'=>true, 'feEditable'=>true, 'feViewable'=>true, 'feGroup'=>'contact', 'tl_class'=>'w50'),
			'sql'                     => "varchar(64) NOT NULL default ''"
		)
		
		)
);
}

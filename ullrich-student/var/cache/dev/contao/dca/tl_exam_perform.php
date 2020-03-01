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
 * Table exam_perform
 */
$GLOBALS['TL_DCA']['tl_exam_perform'] = array
(

	// Config
	'config' => array
	(
			'dataContainer'               => 'Table',
		'ptable'                      => 'tl_exam',
		'enableVersioning'            => true,
		'onload_callback' => array
		(
			array('tl_exam', 'checkPermission')
		),

		'sql' => array
		(
			'keys' => array
			(
				'id' => 'primary', 
				'examid' => 'index', 
				'userid' => 'index',
				'lecturerid' => 'index'		)
		)
	),

		// List
		'list'     => array
	(
				'sorting'           => array
		(
			'mode'        => 2,
			'fields'      => array('date,ESC'),
			'flag'        => 1,
			'panelLayout' => 'filter;sort,search,limit'
		),
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
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		
		'examid' => array
		(
			'foreignKey'              => 'tl_exam.id',
			'sql'                     => "int(10) unsigned NOT NULL default '0'",
			'relation'                => array('type'=>'belongsTo', 'load'=>'lazy')
		),

		'userid' => array
		(
			'foreignKey'              => 'tl_member.id',
			'sql'                     => "int(10) unsigned NOT NULL default '0'",
			'relation'                => array('type'=>'belongsTo', 'load'=>'eager')
		),

		'lecturerid' => array
		(
			'foreignKey'              => 'tl_member.id',
			'sql'                     => "int(10) unsigned NOT NULL default '0'",
			'relation'                => array('type'=>'belongsTo', 'load'=>'eager')
		),

	)
);
}

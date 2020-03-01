<?php

$this->arrMeta = array (
  'engine' => 'MyISAM',
  'charset' => 'utf8',
);

$this->arrFields = array (
  'id' => 'int(10) unsigned NOT NULL auto_increment',
  'tstamp' => 'int(10) unsigned NOT NULL default \'0\'',
  'title' => 'varchar(255) NOT NULL default \'\'',
  'examid' => 'int(10) unsigned NOT NULL default \'0\'',
  'userid' => 'int(10) unsigned NOT NULL default \'0\'',
  'lecturerid' => 'int(10) unsigned NOT NULL default \'0\'',
);

$this->arrOrderFields = array (
);

$this->arrUniqueFields = array (
);

$this->arrKeys = array (
  'id' => 'primary',
  'examid' => 'index',
  'userid' => 'index',
  'lecturerid' => 'index',
);

$this->arrRelations = array (
  'examid' => 
  array (
    'table' => 'tl_exam',
    'field' => 'id',
    'type' => 'belongsTo',
    'load' => 'lazy',
  ),
  'userid' => 
  array (
    'table' => 'tl_member',
    'field' => 'id',
    'type' => 'belongsTo',
    'load' => 'eager',
  ),
  'lecturerid' => 
  array (
    'table' => 'tl_member',
    'field' => 'id',
    'type' => 'belongsTo',
    'load' => 'eager',
  ),
);

$this->blnIsDbTable = true;

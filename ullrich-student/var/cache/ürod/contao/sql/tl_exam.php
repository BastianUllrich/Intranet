<?php

$this->arrMeta = array (
  'engine' => 'MyISAM',
  'charset' => 'utf8',
);

$this->arrFields = array (
  'id' => 'int(10) unsigned NOT NULL auto_increment',
  'tstamp' => 'int(10) unsigned NOT NULL default \'0\'',
  'title' => 'varchar(255) NOT NULL default \'\'',
  'date' => 'int(10) unsigned NOT NULL default \'0\'',
  'department' => 'varchar(10) NOT NULL default \'\'',
  'begin' => 'int(10) unsigned NOT NULL default \'0\'',
  'duration' => 'int(3) unsigned NOT NULL default \'0\'',
  'room' => 'varchar(255) NOT NULL default \'\'',
  'state' => 'blob NULL',
  'tools' => 'blob NULL',
  'comments' => 'varchar(255) NOT NULL default \'\'',
);

$this->arrOrderFields = array (
);

$this->arrUniqueFields = array (
);

$this->arrKeys = array (
  'id' => 'primary',
);

$this->arrRelations = array (
);

$this->blnIsDbTable = true;

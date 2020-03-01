<?php

$this->arrMeta = array (
  'engine' => 'MyISAM',
  'charset' => 'utf8',
);

$this->arrFields = array (
  'id' => 'int(10) unsigned NOT NULL auto_increment',
  'tstamp' => 'int(10) unsigned NOT NULL default \'0\'',
  'title' => 'varchar(255) NOT NULL default \'\'',
  'salutation' => 'varchar(255) NOT NULL default \'\'',
  'firstname' => 'varchar(255) NOT NULL default \'\'',
  'lastname' => 'varchar(255) NOT NULL default \'\'',
  'email' => 'varchar(255) NOT NULL default \'\'',
  'department' => 'varchar(10) NOT NULL default \'\'',
  'mobile' => 'varchar(64) NOT NULL default \'\'',
);

$this->arrOrderFields = array (
);

$this->arrUniqueFields = array (
  0 => 'email',
);

$this->arrKeys = array (
  'id' => 'primary',
);

$this->arrRelations = array (
);

$this->blnIsDbTable = true;

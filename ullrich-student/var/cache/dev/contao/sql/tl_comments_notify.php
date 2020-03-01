<?php

$this->arrMeta = array (
  'engine' => 'MyISAM',
  'charset' => 'utf8',
);

$this->arrFields = array (
  'id' => 'int(10) unsigned NOT NULL auto_increment',
  'tstamp' => 'int(10) unsigned NOT NULL default \'0\'',
  'source' => 'varchar(32) NOT NULL default \'\'',
  'parent' => 'int(10) unsigned NOT NULL default \'0\'',
  'name' => 'varchar(128) NOT NULL default \'\'',
  'email' => 'varchar(255) NOT NULL default \'\'',
  'url' => 'varchar(255) NOT NULL default \'\'',
  'addedOn' => 'varchar(10) NOT NULL default \'\'',
  'ip' => 'varchar(64) NOT NULL default \'\'',
  'tokenConfirm' => 'varchar(32) NOT NULL default \'\'',
  'tokenRemove' => 'varchar(32) NOT NULL default \'\'',
);

$this->arrOrderFields = array (
);

$this->arrUniqueFields = array (
);

$this->arrKeys = array (
  'id' => 'primary',
  'tokenRemove' => 'index',
  'source,parent,tokenConfirm' => 'index',
);

$this->arrRelations = array (
);

$this->blnIsDbTable = true;

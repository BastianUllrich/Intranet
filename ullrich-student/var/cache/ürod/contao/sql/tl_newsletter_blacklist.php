<?php

$this->arrMeta = array (
  'engine' => 'MyISAM',
  'charset' => 'utf8',
);

$this->arrFields = array (
  'id' => 'int(10) unsigned NOT NULL auto_increment',
  'pid' => 'int(10) unsigned NOT NULL default \'0\'',
  'hash' => 'varchar(32) NULL',
);

$this->arrOrderFields = array (
);

$this->arrUniqueFields = array (
  0 => 'pid,hash',
);

$this->arrKeys = array (
  'id' => 'primary',
  'pid,hash' => 'unique',
);

$this->arrRelations = array (
);

$this->blnIsDbTable = true;

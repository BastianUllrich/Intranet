<?php

$this->arrMeta = array (
  'engine' => 'MyISAM',
  'charset' => 'utf8',
);

$this->arrFields = array (
  'id' => 'int(10) unsigned NOT NULL auto_increment',
  'pid' => 'binary(16) NULL',
  'tstamp' => 'int(10) unsigned NOT NULL default \'0\'',
  'uuid' => 'binary(16) NULL',
  'type' => 'varchar(16) NOT NULL default \'\'',
  'path' => 'varchar(1022) NOT NULL default \'\'',
  'extension' => 'varchar(16) NOT NULL default \'\'',
  'hash' => 'varchar(32) NOT NULL default \'\'',
  'found' => 'char(1) NOT NULL default \'1\'',
  'name' => 'varchar(255) NOT NULL default \'\'',
  'importantPartX' => 'int(10) NOT NULL default \'0\'',
  'importantPartY' => 'int(10) NOT NULL default \'0\'',
  'importantPartWidth' => 'int(10) NOT NULL default \'0\'',
  'importantPartHeight' => 'int(10) NOT NULL default \'0\'',
  'meta' => 'blob NULL',
);

$this->arrOrderFields = array (
);

$this->arrUniqueFields = array (
  0 => 'path',
  1 => 'uuid',
);

$this->arrKeys = array (
  'id' => 'primary',
  'pid' => 'index',
  'uuid' => 'unique',
  'path' => 'index(333)',
  'extension' => 'index',
);

$this->arrRelations = array (
);

$this->blnIsDbTable = true;

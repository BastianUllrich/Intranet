<?php

$this->arrMeta = array (
  'engine' => 'MyISAM',
  'charset' => 'utf8',
);

$this->arrFields = array (
  'id' => 'int(10) unsigned NOT NULL auto_increment',
  'pid' => 'int(10) unsigned NOT NULL default \'0\'',
  'tstamp' => 'int(10) unsigned NOT NULL default \'0\'',
  'title' => 'varchar(255) NOT NULL default \'\'',
  'description' => 'varchar(255) NOT NULL default \'\'',
  'sizes' => 'tinyBlob NULL',
  'xsSize' => 'blob NULL',
  'smSize' => 'blob NULL',
  'mdSize' => 'blob NULL',
  'lgSize' => 'blob NULL',
  'xlSize' => 'blob NULL',
  'align' => 'varchar(64) NOT NULL default \'\'',
  'justify' => 'varchar(64) NOT NULL default \'\'',
  'rowClass' => 'varchar(64) NOT NULL default \'\'',
  'noGutters' => 'char(1) NULL',
);

$this->arrOrderFields = array (
);

$this->arrUniqueFields = array (
);

$this->arrKeys = array (
  'id' => 'primary',
);

$this->arrRelations = array (
  'pid' => 
  array (
    'table' => 'tl_theme',
    'field' => 'id',
    'type' => 'hasOne',
    'load' => 'lazy',
  ),
);

$this->blnIsDbTable = true;

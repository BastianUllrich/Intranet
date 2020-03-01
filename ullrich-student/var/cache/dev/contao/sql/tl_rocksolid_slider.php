<?php

$this->arrMeta = array (
  'engine' => 'MyISAM',
  'charset' => 'utf8',
);

$this->arrFields = array (
  'id' => 'int(10) unsigned NOT NULL auto_increment',
  'tstamp' => 'int(10) unsigned NOT NULL default \'0\'',
  'name' => 'varchar(255) NOT NULL default \'\'',
  'type' => 'varchar(255) NOT NULL default \'\'',
  'multiSRC' => 'blob NULL',
  'orderSRC' => 'blob NULL',
);

$this->arrOrderFields = array (
  0 => 'orderSRC',
);

$this->arrUniqueFields = array (
);

$this->arrKeys = array (
  'id' => 'primary',
);

$this->arrRelations = array (
);

$this->blnIsDbTable = true;

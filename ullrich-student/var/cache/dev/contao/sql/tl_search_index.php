<?php

$this->arrMeta = array (
  'engine' => 'MyISAM',
  'charset' => 'utf8',
);

$this->arrFields = array (
  'id' => 'int(10) unsigned NOT NULL auto_increment',
  'pid' => 'int(10) unsigned NOT NULL default \'0\'',
  'word' => 'varchar(64) COLLATE utf8_bin NOT NULL default \'\'',
  'relevance' => 'smallint(5) unsigned NOT NULL default \'0\'',
  'language' => 'varchar(5) NOT NULL default \'\'',
);

$this->arrOrderFields = array (
);

$this->arrUniqueFields = array (
);

$this->arrKeys = array (
  'id' => 'primary',
  'pid' => 'index',
  'word' => 'index',
);

$this->arrRelations = array (
);

$this->blnIsDbTable = true;

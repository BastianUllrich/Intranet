<?php

$this->arrMeta = array (
  'engine' => 'MyISAM',
  'charset' => 'utf8',
);

$this->arrFields = array (
  'id' => 'int(10) unsigned NOT NULL auto_increment',
  'tstamp' => 'int(10) unsigned NOT NULL default \'0\'',
  'name' => 'varchar(128) NOT NULL default \'\'',
  'author' => 'varchar(128) NOT NULL default \'\'',
  'folders' => 'blob NULL',
  'screenshot' => 'binary(16) NULL',
  'templates' => 'varchar(255) NOT NULL default \'\'',
  'vars' => 'text NULL',
  'defaultImageDensities' => 'varchar(255) NOT NULL default \'\'',
  'pdir_th_description' => 'mediumtext NULL',
  'pdir_th_license_domain' => 'varchar(128) NOT NULL default \'\'',
  'pdir_th_short_code' => 'varchar(32) NOT NULL default \'\'',
  'bs_grid_columns' => 'int(10) NULL default NULL',
);

$this->arrOrderFields = array (
);

$this->arrUniqueFields = array (
  0 => 'name',
);

$this->arrKeys = array (
  'id' => 'primary',
);

$this->arrRelations = array (
);

$this->blnIsDbTable = true;

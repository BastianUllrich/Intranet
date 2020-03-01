<?php

$this->arrMeta = array (
  'engine' => 'MyISAM',
  'charset' => 'utf8',
);

$this->arrFields = array (
  'id' => 'int(10) unsigned NOT NULL auto_increment',
  'pid' => 'int(10) unsigned NOT NULL default \'0\'',
  'sorting' => 'int(10) unsigned NOT NULL default \'0\'',
  'tstamp' => 'int(10) unsigned NOT NULL default \'0\'',
  'type' => 'varchar(64) NOT NULL default \'\'',
  'label' => 'varchar(255) NOT NULL default \'\'',
  'name' => 'varchar(64) NOT NULL default \'\'',
  'text' => 'text NULL',
  'html' => 'text NULL',
  'options' => 'blob NULL',
  'mandatory' => 'char(1) NOT NULL default \'\'',
  'rgxp' => 'varchar(32) NOT NULL default \'\'',
  'placeholder' => 'varchar(255) NOT NULL default \'\'',
  'minlength' => 'int(10) unsigned NOT NULL default \'0\'',
  'maxlength' => 'int(10) unsigned NOT NULL default \'0\'',
  'size' => 'varchar(255) NOT NULL default \'\'',
  'multiple' => 'char(1) NOT NULL default \'\'',
  'mSize' => 'smallint(5) unsigned NOT NULL default \'0\'',
  'extensions' => 'varchar(255) NOT NULL default \'\'',
  'storeFile' => 'char(1) NOT NULL default \'\'',
  'uploadFolder' => 'binary(16) NULL',
  'useHomeDir' => 'char(1) NOT NULL default \'\'',
  'doNotOverwrite' => 'char(1) NOT NULL default \'\'',
  'fsType' => 'varchar(32) NOT NULL default \'\'',
  'class' => 'varchar(255) NOT NULL default \'\'',
  'value' => 'varchar(255) NOT NULL default \'\'',
  'accesskey' => 'char(1) NOT NULL default \'\'',
  'tabindex' => 'smallint(5) unsigned NOT NULL default \'0\'',
  'fSize' => 'smallint(5) unsigned NOT NULL default \'0\'',
  'customTpl' => 'varchar(64) NOT NULL default \'\'',
  'slabel' => 'varchar(255) NOT NULL default \'\'',
  'imageSubmit' => 'char(1) NOT NULL default \'\'',
  'singleSRC' => 'binary(16) NULL',
  'invisible' => 'char(1) NOT NULL default \'\'',
  'rsce_data' => 'mediumblob NULL',
  'bs_grid' => 'int(10) unsigned NOT NULL default \'0\'',
  'bs_grid_name' => 'varchar(64) NOT NULL default \'\'',
  'bs_grid_parent' => 'int(10) unsigned NOT NULL default \'0\'',
);

$this->arrOrderFields = array (
);

$this->arrUniqueFields = array (
);

$this->arrKeys = array (
  'id' => 'primary',
  'pid' => 'index',
);

$this->arrRelations = array (
  'pid' => 
  array (
    'table' => 'tl_form',
    'field' => 'id',
    'type' => 'belongsTo',
    'load' => 'lazy',
  ),
  'bs_grid' => 
  array (
    'table' => 'tl_bs_grid',
    'field' => 'id',
    'type' => 'hasOne',
    'load' => 'lazy',
  ),
);

$this->blnIsDbTable = true;

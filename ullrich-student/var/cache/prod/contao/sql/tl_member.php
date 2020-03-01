<?php

$this->arrMeta = array (
  'engine' => 'MyISAM',
  'charset' => 'utf8',
);

$this->arrFields = array (
  'id' => 'int(10) unsigned NOT NULL auto_increment',
  'tstamp' => 'int(10) unsigned NOT NULL default \'0\'',
  'firstname' => 'varchar(255) NOT NULL default \'\'',
  'lastname' => 'varchar(255) NOT NULL default \'\'',
  'dateOfBirth' => 'varchar(11) NOT NULL default \'\'',
  'gender' => 'varchar(32) NOT NULL default \'\'',
  'company' => 'varchar(255) NOT NULL default \'\'',
  'street' => 'varchar(255) NOT NULL default \'\'',
  'postal' => 'varchar(32) NOT NULL default \'\'',
  'city' => 'varchar(255) NOT NULL default \'\'',
  'state' => 'varchar(64) NOT NULL default \'\'',
  'country' => 'varchar(2) NOT NULL default \'\'',
  'phone' => 'varchar(64) NOT NULL default \'\'',
  'mobile' => 'varchar(64) NOT NULL default \'\'',
  'fax' => 'varchar(64) NOT NULL default \'\'',
  'email' => 'varchar(255) NOT NULL default \'\'',
  'website' => 'varchar(255) NOT NULL default \'\'',
  'language' => 'varchar(5) NOT NULL default \'\'',
  'groups' => 'blob NULL',
  'login' => 'char(1) NOT NULL default \'\'',
  'username' => 'varchar(64) COLLATE utf8_bin NULL',
  'password' => 'varchar(255) NOT NULL default \'\'',
  'assignDir' => 'char(1) NOT NULL default \'\'',
  'homeDir' => 'binary(16) NULL',
  'disable' => 'char(1) NOT NULL default \'\'',
  'start' => 'varchar(10) NOT NULL default \'\'',
  'stop' => 'varchar(10) NOT NULL default \'\'',
  'dateAdded' => 'int(10) unsigned NOT NULL default \'0\'',
  'lastLogin' => 'int(10) unsigned NOT NULL default \'0\'',
  'currentLogin' => 'int(10) unsigned NOT NULL default \'0\'',
  'loginCount' => 'smallint(5) unsigned NOT NULL default \'3\'',
  'locked' => 'int(10) unsigned NOT NULL default \'0\'',
  'session' => 'blob NULL',
  'autologin' => 'varchar(64) NULL',
  'createdOn' => 'int(10) unsigned NOT NULL default \'0\'',
  'activation' => 'varchar(32) NOT NULL default \'\'',
  'newsletter' => 'blob NULL',
  'usertype' => 'varchar(20) NOT NULL default \'\'',
  'department' => 'varchar(80) NOT NULL default \'\'',
  'study_course' => 'varchar(30) NOT NULL default \'\'',
  'chipcard_nr' => 'varchar(20) NOT NULL default \'\'',
  'handicaps' => 'blob NULL',
  'handicaps_others' => 'varchar(64) NOT NULL default \'\'',
  'rehab_devices' => 'blob NULL',
  'rehab_devices_others' => 'varchar(30) NOT NULL default \'\'',
  'extra_time' => 'varchar(8) NOT NULL default \'\'',
  'extra_time_unit' => 'varchar(10) NOT NULL default \'\'',
  'contact_person' => 'varchar(10) NOT NULL default \'\'',
  'comments' => 'varchar(80) NOT NULL default \'\'',
);

$this->arrOrderFields = array (
);

$this->arrUniqueFields = array (
  0 => 'email',
  1 => 'username',
  3 => 'autologin',
);

$this->arrKeys = array (
  'id' => 'primary',
  'username' => 'unique',
  'email' => 'index',
  'autologin' => 'unique',
  'activation' => 'index',
);

$this->arrRelations = array (
  'groups' => 
  array (
    'table' => 'tl_member_group',
    'field' => 'id',
    'type' => 'belongsToMany',
    'load' => 'lazy',
  ),
);

$this->blnIsDbTable = true;

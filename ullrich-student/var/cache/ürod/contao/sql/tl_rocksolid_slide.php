<?php

$this->arrMeta = array (
  'engine' => 'MyISAM',
  'charset' => 'utf8',
);

$this->arrFields = array (
  'id' => 'int(10) unsigned NOT NULL auto_increment',
  'pid' => 'int(10) unsigned NOT NULL default \'0\'',
  'tstamp' => 'int(10) unsigned NOT NULL default \'0\'',
  'sorting' => 'int(10) unsigned NOT NULL default \'0\'',
  'title' => 'varchar(255) NOT NULL default \'\'',
  'type' => 'varchar(255) NOT NULL default \'\'',
  'videoURL' => 'varchar(255) NOT NULL default \'\'',
  'videos' => 'blob NULL',
  'videosOrder' => 'blob NULL',
  'muteVideos' => 'char(1) NOT NULL default \'\'',
  'hideVideoControls' => 'char(1) NOT NULL default \'\'',
  'videosPlayInline' => 'char(1) NOT NULL default \'\'',
  'singleSRC' => 'binary(16) NULL',
  'thumbImage' => 'binary(16) NULL',
  'thumbTitle' => 'varchar(255) NOT NULL default \'\'',
  'thumbClass' => 'varchar(255) NOT NULL default \'\'',
  'thumbText' => 'mediumtext NULL',
  'scaleMode' => 'varchar(64) NOT NULL default \'\'',
  'imagePosition' => 'varchar(64) NOT NULL default \'\'',
  'centerContent' => 'varchar(64) NOT NULL default \'\'',
  'invertControls' => 'char(1) NOT NULL default \'\'',
  'autoplay' => 'int(10) unsigned NOT NULL default \'0\'',
  'linkUrl' => 'varchar(255) NOT NULL default \'\'',
  'linkNewWindow' => 'char(1) NOT NULL default \'\'',
  'backgroundImage' => 'binary(16) NULL',
  'backgroundVideos' => 'blob NULL',
  'backgroundVideosOrder' => 'blob NULL',
  'backgroundImageSize' => 'varchar(64) NOT NULL default \'\'',
  'backgroundScaleMode' => 'varchar(64) NOT NULL default \'\'',
  'backgroundPosition' => 'varchar(64) NOT NULL default \'\'',
  'slideClass' => 'varchar(255) NOT NULL default \'\'',
  'sliderClass' => 'varchar(255) NOT NULL default \'\'',
  'published' => 'char(1) NOT NULL default \'\'',
  'start' => 'varchar(10) NOT NULL default \'\'',
  'stop' => 'varchar(10) NOT NULL default \'\'',
);

$this->arrOrderFields = array (
  0 => 'videosOrder',
  1 => 'backgroundVideosOrder',
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
    'table' => 'tl_rocksolid_slider',
    'field' => 'id',
    'type' => 'belongsTo',
    'load' => 'eager',
  ),
);

$this->blnIsDbTable = true;

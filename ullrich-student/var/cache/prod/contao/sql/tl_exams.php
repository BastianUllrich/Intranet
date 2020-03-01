<?php

$this->arrMeta = array (
  'engine' => 'MyISAM',
  'charset' => 'utf8',
);

$this->arrFields = array (
  'id' => 
  array (
    'type' => 'integer',
    'unsigned' => true,
    'autoincrement' => true,
  ),
  'tstamp' => 
  array (
    'type' => 'integer',
    'unsigned' => true,
    'default' => 0,
  ),
  'title' => 
  array (
    'type' => 'string',
    'length' => 255,
    'default' => '',
  ),
  'date' => 
  array (
    'type' => 'integer',
    'length' => 10,
    'default' => '0',
  ),
  'begin' => 
  array (
    'type' => 'string',
    'length' => 10,
    'default' => '',
  ),
  'duration' => 
  array (
    'type' => 'integer',
    'unsigned' => true,
    'default' => 0,
  ),
  'department' => 
  array (
    'type' => 'string',
    'length' => 80,
    'default' => '',
  ),
  'tools' => 
  array (
    'type' => 'string',
    'length' => 255,
    'default' => '',
  ),
  'status' => 
  array (
    'type' => 'string',
    'length' => 80,
    'default' => '',
  ),
  'remarks' => 
  array (
    'type' => 'string',
    'length' => 255,
    'default' => '',
  ),
  'lecturer_title' => 
  array (
    'type' => 'string',
    'length' => 255,
    'default' => '',
  ),
  'lecturer_firstname' => 
  array (
    'type' => 'string',
    'length' => 255,
    'default' => '',
  ),
  'lecturer_lastname' => 
  array (
    'type' => 'string',
    'length' => 255,
    'default' => '',
  ),
  'lecturer_email' => 
  array (
    'type' => 'string',
    'length' => 255,
    'default' => '',
  ),
  'lecturer_mobile' => 
  array (
    'type' => 'string',
    'length' => 15,
    'default' => '',
  ),
);

$this->arrOrderFields = array (
);

$this->arrUniqueFields = array (
);

$this->arrKeys = array (
  'id' => 'primary',
);

$this->arrRelations = array (
);

$this->blnIsDbTable = true;

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
  'supervisor_id' => 
  array (
    'type' => 'integer',
    'default' => 0,
  ),
  'date' => 
  array (
    'type' => 'integer',
    'length' => 10,
    'default' => 0,
  ),
  'time_from' => 
  array (
    'type' => 'string',
    'length' => 10,
    'default' => '',
  ),
  'time_until' => 
  array (
    'type' => 'string',
    'length' => 10,
    'default' => '',
  ),
  'task' => 
  array (
    'type' => 'string',
    'length' => 16,
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

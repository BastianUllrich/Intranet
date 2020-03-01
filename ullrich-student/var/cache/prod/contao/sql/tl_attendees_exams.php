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
  'attendee_id' => 
  array (
    'type' => 'integer',
    'default' => 0,
  ),
  'exam_id' => 
  array (
    'type' => 'integer',
    'default' => 0,
  ),
  'status' => 
  array (
    'type' => 'string',
    'length' => '16',
    'default' => 0,
  ),
  'rehab_devices' => 
  array (
    'type' => 'blob',
    'notnull' => false,
    'default' => '',
  ),
  'rehab_devices_others' => 
  array (
    'type' => 'string',
    'length' => '30',
    'default' => '',
  ),
  'assistant_id' => 
  array (
    'type' => 'integer',
    'default' => 0,
  ),
  'extra_time' => 
  array (
    'type' => 'integer',
    'unsigned' => true,
    'default' => 0,
  ),
  'extra_time_unit' => 
  array (
    'type' => 'string',
    'length' => '8',
    'default' => '',
  ),
  'seat' => 
  array (
    'type' => 'string',
    'length' => '8',
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

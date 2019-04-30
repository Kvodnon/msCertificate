<?php
$xpdo_meta_map['mscCertificate']= array (
  'package' => 'mscertificate',
  'version' => '1.1',
  'table' => 'msc_certificates',
  'extends' => 'xPDOSimpleObject',
  'tableMeta' => 
  array (
    'engine' => 'InnoDB',
  ),
  'fields' => 
  array (
    'price_min' => 0,
    'price_step' => 1,
    'price_max' => 0,
    'price_default' => 1,
  ),
  'fieldMeta' => 
  array (
    'price_min' => 
    array (
      'dbtype' => 'smallint',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
    ),
    'price_step' => 
    array (
      'dbtype' => 'smallint',
      'phptype' => 'integer',
      'null' => false,
      'default' => 1,
    ),
    'price_max' => 
    array (
      'dbtype' => 'smallint',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
    ),
    'price_default' => 
    array (
      'dbtype' => 'smallint',
      'phptype' => 'integer',
      'null' => false,
      'default' => 1,
    ),
  ),
);

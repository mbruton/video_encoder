<?php

/* Prevent Direct Access */
defined('ADAPT_STARTED') or die;

$adapt = $GLOBALS['adapt'];
$sql = $adapt->data_source->sql;


$sql->create_table('video_codec')
    ->add('video_codec_id', 'bigint')
    ->add('type', 'varchar(16)', false)
    ->add('name', 'varchar(32)', false)
    ->add('description', 'varchar(512)')
    ->add('can_encode', "enum('Yes', 'No'')", false, 'No')
    ->add('can_decode', "enum('Yes', 'No'')", false, 'No')
    ->add('date_created', 'datetime')
    ->add('date_modified', 'timestamp')
    ->add('date_deleted', 'datetime')
    ->primary_key('video_codec_id_id')
    ->execute();

    

    




?>
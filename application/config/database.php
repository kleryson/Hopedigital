<?php defined('SYSPATH') or die('No direct access allowed.');

return array
(
		'default' => array
		(
				'type'       => 'pdo',
				'connection' => array(
					'dsn'=>'mysql:dbname=sistema;host=192.69.223.240',
					'username' => 'sistema',
					'password' => 's1st3m4',
					'persistent' => FALSE 
				),
				'table_prefix' => '',
				'charset'      => 'utf8',
				'caching'      => FALSE,
				'profiling'    => TRUE,
		)
);
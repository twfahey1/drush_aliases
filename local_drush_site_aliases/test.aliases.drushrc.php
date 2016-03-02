<?php

	// Site test, environment local
	$aliases['prod'] = array(
	  'root' => '/Users/tylerfahey/Documents/Local Sites/test-prod',
	  'uri' => 'test-prod',
	);

	$aliases['dev'] = array(
	  'root' => '/Users/tylerfahey/Documents/Local Sites/test-dev',
	  'uri' => 'test-dev',
	  'path-aliases' => array(
			'%dump-dir' => 'db_backups',
		),
		'source-command-specific' => array (
			'sql-sync' => array (
			  'no-cache' => TRUE,
			  'structure-tables-key' => 'common',
			),
		),
	  // No need to modify the following settings
		'command-specific' => array (
			'sql-sync' => array (
		      'sanitize' => TRUE,
		      'no-ordered-dump' => TRUE,
		      'structure-tables' => array(
		       // You can add more tables which contain data to be ignored by the database dump
		        'common' => array('cache', 'cache_filter', 'cache_menu', 'cache_page', 'history', 'sessions', 'watchdog'),
	      		),
			),
		), 
	);

	$aliases['lahndev'] = array(
	  'root' => '/Users/tylerfahey/Documents/Local Sites/lahn.utexas dev',
	  'uri' => 'lahn-dev',
	);

	$aliases['lahnprod'] = array(
	  'root' => '/Users/tylerfahey/Documents/Local Sites/lahn.utexas prod',
	  'uri' => 'lahn-prod',
	);

?>
<?php
require 'environment.php';
global $config;
$config = array();
if(ENVIRONMENT == "development") {
	define("BASE_URL", "http://localhost/institucional");
	$config['dbname'] = 'institucional_db';
	$config['host']	  = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '123456';
} else {
	$config['dbname'] = '';
	$config['host']   = '';
	$config['dbuser'] = '';
	$config['dbpass'] = '';
}


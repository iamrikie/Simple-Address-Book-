<?php
//Include Config
//require_once('../config/config.php');
include('config/config.php');

//Helper Files
require_once('helpers/system_helper.php');

//Autoload
spl_autoload_register(function ($class_name) {
	require_once('libraries/'.$class_name.'.php');
});

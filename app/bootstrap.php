<?php
	// Load Config
	require_once 'config/config.php';

	// Load libs
	// require_once 'libs/core.php';
	// require_once 'libs/controller.php';
	// require_once 'libs/database.php';

	// Autoload Core Libs
	spl_autoload_register(function($className){
		require_once 'libs/' . $className . '.php';
	});
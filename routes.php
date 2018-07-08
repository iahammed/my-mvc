<?php

$router->define([
	''			=>	'controllers/home.php',
	'about'		=>	'controllers/about.php',
	'contact'	=> 	'controllers/contact.php',
	'tasks'		=> 	'controllers/task.php',
	'404'		=>	'controllers/404.php'
]);

// $router->define('','controllers/home.php');
// $router->define('tasks','controllers/task.php');
// $router->define('about','controllers/about.php');
// $router->define('contact','controllers/contact.php');

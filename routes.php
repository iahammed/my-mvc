<?php

// $router->define([
// 	''			=>	'controllers/home.php',
// 	'about'		=>	'controllers/about.php',
// 	'contact'	=> 	'controllers/contact.php',
// 	'task'		=> 	'controllers/task.php',
// 	'404'		=>	'controllers/404.php'
// ]);


$router->get('','controllers/home.php');
$router->get('about','controllers/about.php');
$router->get('contact','controllers/contact.php');
$router->get('task','controllers/task.php');
$router->post('task','controllers/task.php');
$router->get('404','controllers/404.php');





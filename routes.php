<?php

$router->get('','PagesController@home');
$router->get('about','PagesController@about');
$router->get('contact','PagesController@contact');

$router->get('task','TaskController@index');
$router->get('task/id','TaskController@sho');
$router->get('task/create','TaskController@create');
$router->post('task/store','TaskController@store');


$router->get('404','controllers/404.php');





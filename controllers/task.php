<?php


if(!empty($_POST['task'])){
	$task = $app['database']->insert('tasks',[
		'description' => $_POST['task'],
		'completed'		=> 0
	]);
}


$tasks = $app['database']->selectAll('tasks');

require 'views/task.view.php';



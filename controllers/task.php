<?php

if(!empty($_POST['task'])){
	$task = App::get('database')->insert('tasks',[
		'description' => $_POST['task'],
		'completed'		=> 0
	]);
}


$tasks = App::get('database')->selectAll('tasks');

require 'views/task.view.php';



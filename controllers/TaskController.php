<?php

class TaskController {
	
	public function index()
	{
		$tasks = App::get('database')->selectAll('tasks');
		return view('tasks/task', compact('tasks'));
	}

	public function create()
	{
		return view('tasks/create');
	}

	public function store()
	{
		App::get('database')->insert('tasks',[
			'description' => $_POST['description']
		]);
		redirect('task');
	}

	public function show($id)
	{
		die(var_dump($id));
	}

	public function edit($id)
	{

	}

	public function update($id)
	{

	}



	public function delete($id)
	{
		die(var_dump($id));
	}


}
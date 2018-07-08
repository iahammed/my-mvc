<?php require 'views/layout/header.view.php'; ?>
<h1>List of tasks</h1>
<ul>
	<?php foreach($tasks as $task) : ?>
		<li>
			<?php if($task->completed) : ?>
				<strike> <?= $task->description ; ?></strike>
			<?php else: ?>
				<?= $task->description ; ?>
			<?php endif; ?>
		</li>
	<?php endforeach; ?>
</ul>
<hr>
<form action="/tasks" method="POST">
  	<div class="form-group">
    	<label for="">New task</label>
    	<input 	type="text" name="task" class="form-control" 
    			placeholder="Enter a new task">
  	</div>
  	<button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php require 'views/layout/footer.view.php'; ?>
